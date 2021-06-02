<?php

namespace App\Http\Controllers;

use App\Models\Activities;

class ActivitiesController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");

        $activities = Activities::all()->sortBy('price'); // sortByDesc

        return view('activities') 
        -> with('navs',  $menus )
        -> with('activities',  $activities );
    }
}
