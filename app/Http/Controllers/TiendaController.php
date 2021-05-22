<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Product;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        $products = Product::all()->sortBy('price'); // sortByDesc

        return view('tienda') 
        -> with('navs',  $menus )
        -> with('products',  $products );
    }

    public function show($id){
        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        $products = Product::find($id);  // $Product = Product::find($id);   <-- metodo viene por defecto

        return view('infoProduct')
        -> with('navs',  $menus)
        -> with('products',  $products );
    }

    public function search(Request $request){
        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Contacto");

        $search = $request->input('search');
        $order = $request->input('order');
    
        $products = Product::query()
        ->where('name', 'LIKE', "%$search%")
        ->get()->sortBy('name');

        if ($order == "Asc" ) {
            $products = Product::query()
            ->where('name', 'LIKE', "%$search%")
            ->get()->sortBy('price');
        }else if ($order == "Dec" ) {
            $products = Product::query()
            ->where('name', 'LIKE', "%$search%")
            ->get()->sortByDesc('price');
        }
            
        return view('tienda') 
        -> with('navs',  $menus )
        -> with('products',  $products );
    }

    public function buy(Request $request){

        $sales = new Sales;
        $sales->save();
 
        return $this->index();
    }

}
