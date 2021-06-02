<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;


class CheckOutController extends Controller
{
    public function index(Product $product){

        $IBAN =Crypt::decryptString( auth()->user()->IBAN);

        return view('checkOut') 
        -> with('product',  $product )
        -> with('iban',  $IBAN );
    }

    public function store(Request $request, Product $product){

        $user_id = \Auth::user()->id;
        $address = $request->input('address');

        Sales::create([
            'product_id' => $product['id'],
            'user_id' => $user_id,
            'shipping_address' => $address
        ]);

        return view('checkOutConfirm') 
        -> with('product',  $product );
    }
}
