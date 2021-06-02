<?php

namespace App\Http\Controllers;


class ContactoController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");

        return view('contacto') 
        -> with('navs',  $menus );
    }
}
