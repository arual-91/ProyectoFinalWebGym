<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index(){

        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");

        $products = Product::all()->sortBy('price'); // sortByDesc

        return view('tienda') 
        -> with('navs',  $menus )
        -> with('products',  $products );
    }

    public function show($id){
        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");

        $product = Product::find($id);  // $Product = Product::find($id);   <-- metodo viene por defecto

        return view('infoProduct')
        -> with('navs',  $menus)
        -> with('product',  $product );
    }

    public function search(Request $request){
        $menus = array("Inicio", "Tarifas", "Tienda", "Instalaciones","Actividades","Contacto");

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

    public function store(Product $product){

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });

        return redirect('/tienda');
    }

}
