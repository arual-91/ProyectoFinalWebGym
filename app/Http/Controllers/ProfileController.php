<?php
namespace App\Http\Controllers;
use DateTime;
use App\Models\User;
use App\Models\Sales;
use App\Models\Booking;
use App\Models\Product;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ProfileController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");
        $user = \Auth::user()->rol;
        $user_id = \Auth::user()->id;
        $time_out = (new \DateTime())->modify('-60 minutes');
        //$time_out = (new \DateTime())->modify('-1 minutes');
        $date_now = new \DateTime();
        //$date_now = (new \DateTime())->modify('+7 day');
        $day_week_es = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
        $IBAN =Crypt::decryptString( auth()->user()->IBAN);

        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Actividades","Ventas","Reservas","Horario");
        }
        if($user == 2){
            $menusProfile = array("Perfil","Horario");
        }

        $orders = Sales::join('product', 'product.id', '=', 'sales.product_id')
                        ->join('users', 'users.id', '=', 'sales.user_id')
                        ->where('users.id', $user_id)
                        ->get(['sales.*', 'product.name as name_product','product.price','users.name as name_user'])
                        ->sortByDesc('created_at');

        $bookings = Booking::join('schedule', 'schedule.id', '=', 'bookings.id_schedules')
                            ->join('users', 'users.id', '=', 'bookings.user_id')
                            ->leftJoin('activities', 'activities.id', '=', 'schedule.id_Activity')
                            ->where('users.id', $user_id)
                            ->get(['bookings.id as id_booking','bookings.created_at as created_at_booking','schedule.date','schedule.hour','activities.name','schedule.places'])
                            ->sortByDesc('date')
                            ->sortByDesc('hour');
        
        return view('profile') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('iban',  $IBAN )
        -> with('orders',  $orders )
        -> with('time_out',  $time_out )
        -> with('date_now',  $date_now )
        -> with('day_week_es',  $day_week_es )
        -> with('bookings',  $bookings );
    }

    public function user(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");
        $user = \Auth::user()->rol;

        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Actividades","Ventas","Reservas","Horario");
        }
        if($user == 2){
            $menusProfile = array("Perfil","Horario");
        }

        $users = User::all();

        return view('profileuser') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('users',  $users );
    }

    public function product(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");
        $user = \Auth::user()->rol;

        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Actividades","Ventas","Reservas","Horario");
        }
        if($user == 2){
            $menusProfile = array("Perfil","Horario");
        }

        $products = Product::all();

        return view('profileproduct') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('products',  $products );
    }

    public function activity(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");
        $user = \Auth::user()->rol;

        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Actividades","Ventas","Reservas","Horario");
        }
        if($user == 2){
            $menusProfile = array("Perfil","Horario");
        }

        $activities = Activities::all();

        return view('profileActivities') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('activities',  $activities );
    }

    public function sales(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");
        $user = \Auth::user()->rol;

        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Actividades","Ventas","Reservas","Horario");
        }
        if($user == 2){
            $menusProfile = array("Perfil","Horario");
        }

        $sales = Sales::leftJoin('product', 'product.id', '=', 'sales.product_id')
                        ->leftJoin('users', 'users.id', '=', 'sales.user_id')
                        ->get(['sales.*', 'product.name as name_product','product.price','users.name as name_user'])
                        ->sortByDesc('created_at');

         return view('profilesale') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('sales',  $sales ); 
    }

    public function delete_user($id){
        User::find($id)->delete($id);
        return json_encode(array('statusCode'=>200));
    }

    public function delete_product($id){
        Product::find($id)->delete();
        return json_encode(array('statusCode'=>200));
    }

    public function delete_activity($id){
        Activities::find($id)->delete();
        return json_encode(array('statusCode'=>200));
    }

    public function delete_order($id){
        Sales::find($id)->delete();
        return json_encode(array('statusCode'=>200));
    }

    public function create_product(Request $request){
        
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $file = $request-> file("urlfoto");
        $name_file = $file->getClientOriginalName();
        $file->move(public_path("imagenes/tienda/"),$name_file);

        Product::create([
            'name' =>  $name,
            'description' => $description,
            'price' => $price,
            'image' =>  $name_file,
        ]);

        return redirect('/perfil/productos');
    }

    public function create_activity(Request $request){
        
        $name = $request->input('name');
        $description = $request->input('description');
        $intensity = $request->input('intensity');
        $calories = $request->input('calories');
        $file = $request-> file("urlfoto");
        $name_file = $file->getClientOriginalName();
        $file->move(public_path("imagenes/activities/"),$name_file);

        Activities::create([
            'name' =>  $name,
            'description' => $description,
            'intensity' => $intensity,
            'calories' => $calories,
            'image' =>  $name_file,
        ]);

        return redirect('/perfil/actividades');
    }
}
