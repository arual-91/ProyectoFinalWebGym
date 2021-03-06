<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");
        $user = \Auth::user()->rol;

        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Actividades","Ventas","Reservas","Horario");
        }
        if($user == 2){
            $menusProfile = array("Perfil","Horario");
        }

        $schedules = Schedule::leftJoin('activities', 'activities.id', '=', 'schedule.id_Activity')
                                ->get(['schedule.*', 'activities.name as activity'])
                                ->sortBy('date')
                                ->sortBy('hour');

        $hours =  DB::table('schedule')->distinct()->get(['hour']);
        $dates =  DB::table('schedule')->distinct()->get(['date']);
        $Activities =  DB::table('activities')->distinct()->get(['id', 'name' ]);

        $day_week_es = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
        $last_day_of_week = (Schedule::all()->sortByDesc('date')->first())->date;

        $date_now = new \DateTime();
        //$date_now = (new \DateTime())->modify('+5 day');

        return view('profileSchedule') 
            -> with('navs',  $menus )
            -> with('navsProfiles',  $menusProfile )
            -> with('schedules',  $schedules )
            -> with('hours',  $hours )  
            -> with('dates',  $dates )  
            -> with('Activities',  $Activities )
            -> with('date_now',  $date_now )
            -> with('day_week_es',  $day_week_es )
            -> with('last_day_of_week',  $last_day_of_week );  
    }

    public function book_class($id){

        $user_id = \Auth::user()->id;

        $schedules = Schedule::find($id);
        $schedules->occupation = $schedules->occupation + 1;
        $schedules-> save();

        Booking::create([
            'id_schedules' =>  $id,
            'user_id' => $user_id,
        ]);

        return json_encode(array('statusCode'=>200));
    }
    
    public function delete_booking($id){

        $schedules_id = Booking::find($id)->id_schedules;
        $schedules = Schedule::find($schedules_id);
        $schedules->occupation = $schedules->occupation - 1;
        $schedules->save();

        Booking::find($id)->delete($id);
        return json_encode(array('statusCode'=>200));
    }

    public function add_class(Request $request){

        $dates = $request->input('dates');
        $hour = $request->input('hours');
        $id_Activity = $request->input('Activities');
        $place = $request->input('place');

        $id_schedule = DB::table('schedule')
                        ->where('date', '=', $dates)
                        ->where('hour', '=', $hour)
                        ->get(['id']);

        $schedules = Schedule::find($id_schedule[0]->id);
        if($id_Activity == "null"){
            $schedules->id_Activity = null;
        }else{
            $schedules->id_Activity = $id_Activity;
        }
        $schedules->places = $place ;
        $schedules-> save();

        return redirect('/perfil/horario');
    }

    public function update_schedule(Request $request){

        $schedules = Schedule::all();

        foreach ($schedules as $schedule){
            $schedule->occupation = 0;
            $date_new = (new DateTime($schedule->date))->modify('+7 day')->format('Y-m-d');
            $schedule->date = $date_new;
            $schedule-> save();
        }

        $bookings = Booking::truncate();
        
        return redirect('/perfil/horario');
    }

    public function show_booking(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");
        $user = \Auth::user()->rol;
        $day_week_es = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
        $date_now = new \DateTime();

        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Actividades","Ventas","Reservas","Horario");
        }
        if($user == 2){
            $menusProfile = array("Perfil","Horario");
        }

        $bookings = Booking::join('schedule', 'schedule.id', '=', 'bookings.id_schedules')
                            ->join('users', 'users.id', '=', 'bookings.user_id')
                            ->leftJoin('activities', 'activities.id', '=', 'schedule.id_Activity')
                            ->get([
                                'bookings.id as id_booking',
                                'schedule.date',
                                'schedule.hour',
                                'activities.name',
                                'schedule.places',
                                'users.name as name_user',
                                'users.email',
                                'users.phone',
                                'users.last_name as last_name_user' ])
                            ->sortByDesc('date');

         return view('profileBooking') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('day_week_es',  $day_week_es )
        -> with('date_now',  $date_now )
        -> with('bookings',  $bookings ); 
    }
}
