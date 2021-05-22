<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Sales;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;




class ProfileController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        $user = \Auth::user()->rol;

        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Ventas");
        }
        if($user == 2){
            $menusProfile = array("Perfil");
        }
       

        $IBAN =Crypt::decryptString( auth()->user()->IBAN);

        return view('profile') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('iban',  $IBAN );

    }

    public function user(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        $user = \Auth::user()->rol;
        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Ventas");
        }
        if($user == 2){
            $menusProfile = array("Perfil");
        }

        $users = User::all();

        return view('profileuser') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('users',  $users );

    }

    public function product(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        $user = \Auth::user()->rol;
        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Ventas");
        }
        if($user == 2){
            $menusProfile = array("Perfil");
        }

        $products = Product::all();

        return view('profileproduct') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('products',  $products );

    }

    public function sales(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        $user = \Auth::user()->rol;
        if($user == 1){
            $menusProfile = array("Perfil","Usuarios","Productos","Ventas");
        }
        if($user == 2){
            $menusProfile = array("Perfil");
        }

        $sales = Sales::all();

        return view('profilesale') 
        -> with('navs',  $menus )
        -> with('navsProfiles',  $menusProfile )
        -> with('sales',  $sales );

    }


}
