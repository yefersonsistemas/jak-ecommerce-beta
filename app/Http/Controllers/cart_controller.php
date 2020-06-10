<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cart_controller extends Controller
{
    //

    function addToCart(Request $r)
    {
        DB::select("SELECT * from addtocart('".$_SERVER['REMOTE_ADDR']."',".$r->quantity.",'".$r->productsCode."')"); 
    }
    function removeToCart(Request $r){
        DB::select("SELECT * from removetocart('".$_SERVER['REMOTE_ADDR']."','".$r->productsCode."')"); 
    }
    function updateToCart(Request $r){
        DB::select("SELECT * from addtocart('".$_SERVER['REMOTE_ADDR']."',".$r->quantity.",'".$r->productsCode."')"); 
    }
    function clearCart(Request $r){
        DB::select("SELECT * from clearcart('".$_SERVER['REMOTE_ADDR']."')"); 
    }
    function getProductCart()
    {
        return response()->json([

            'itemCart'   => DB::select("SELECT code, quantity, name , price, fullprice
            FROM public.view_carshop where ip = '".$_SERVER['REMOTE_ADDR']."'"),
            'totalPrice' => DB::select("SELECT  SUM(price*quantity) as totalprice
            FROM public.view_carshop where ip = '".$_SERVER['REMOTE_ADDR']."'")[0]->totalprice
        ]);
    }
}
