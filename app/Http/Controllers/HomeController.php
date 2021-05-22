<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        return view('index') 
        -> with('navs',  $menus );
    }



}
