<?php

namespace App\Http\Controllers;


class TarifasController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        return view('tarifas') 
        -> with('navs',  $menus );
    }
}
