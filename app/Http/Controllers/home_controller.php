<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class home_controller extends Controller
{
    //
    function index(){
        
        $auxTopPicks = '{
            "quantity" : 0,
            "src": "'.DB::select("SELECT srctp FROM view_home")[0]->srctp.'"
        }';

        $auxNewArrivals = '{
            "quantity" : '.DB::select("SELECT quantity FROM public.view_countnewarrival;")[0]->quantity.',
            "src": "'.DB::select("SELECT srcna FROM view_home")[0]->srcna.'"
        }';

        $banners          = DB::select("select * from  view_banners");
        $topPicks         = json_decode($auxTopPicks);
        $newArrivals      = json_decode($auxNewArrivals);
        $productsCategory = DB::select("select * from  view_productosbuscar limit 3");
        $Promotion        = [];

        return response()->json([
            'banners'          => $banners,
            'topPicks'         => $topPicks,
            'newArrivals'     => $newArrivals,
            'productsCategory' => $productsCategory,
            'Promotion'        => $Promotion,
        ]);
    }
}
