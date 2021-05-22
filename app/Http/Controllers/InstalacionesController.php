<?php

namespace App\Http\Controllers;


class InstalacionesController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        return view('instalaciones') 
        -> with('navs',  $menus );
    }
}
