<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cart_controller extends Controller
{
    //

    function addToCart(Request $r)
    {

    //      DB::select("SELECT * FROM f_addtocart($_SERVER['REMOTE_ADDR'],$r->codeproducto,123)")  
    }
    function clearCart(Request $r){
        $r->session()->forget('cart');
    }
    function getProductCart()
    {
        $cartItems = '[
                        { "id": 1, "title": "gatos", "price": 35.4 },
                        { "id": 2, "title": "perros", "price": 24.5 },
                        { "id": 3, "title": "sapos", "price": 15.5 }
                    ]';
        return response()->json([
            'itemCart'   => json_decode($cartItems),
            'totalPrice' => 500
        ]);
    }
}
