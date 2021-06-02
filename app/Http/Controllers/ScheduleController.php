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
            $menusProfile = array("Perfil","Usuarios","Productos","Actividades","Ventas","Horario");
        }
        if($user == 2){
            $menusProfile = array("Perfil","Reservar");
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

        //$date_now = new \DateTime();
        //$date_now = (new \DateTime())->modify('+5 day');
        $date_now = (new \DateTime())->modify('+15 day');

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

    public function book_class(Schedule $class){

        $id_schedule = $class->id;
        $user_id = \Auth::user()->id;

        $schedules = Schedule::find($id_schedule);
        $schedules->occupation = $schedules->occupation + 1;
        
        $schedules-> save();

        Booking::create([
            'id_schedules' =>  $id_schedule,
            'user_id' => $user_id,
        ]);

        return redirect('/perfil');
    }
    
    public function delete_booking(Booking $booking){

        $schedules = Schedule::find($booking->id_schedules);
        $schedules->occupation = $schedules->occupation - 1;
        $schedules-> save();

        $booking_delete = Booking::find( $booking->id );
        $booking_delete->delete();

        return redirect('/perfil');
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
        
        return redirect('/perfil/horario');
    }
}
