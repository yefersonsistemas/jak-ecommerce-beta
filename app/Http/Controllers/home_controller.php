<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class home_controller extends Controller
{
    //
    function index(){
        $auxTopPicks = '{
            "quantity" : 1,
            "src": "images/deals3.jpg"
        }';
        $auxNewArraivals = '{
            "quantity" : 0,
            "src": "images/deals3.jpg"
        }';
        $banners          = [];
        $topPicks         = json_decode($auxTopPicks);
        $newArraivals     = json_decode($auxNewArraivals);
        $productsCategory = DB::select("select * from  view_productosbuscar limit 3");
        $Promotion        = [];

        return response()->json([
            'banners'          => $banners,
            'topPicks'         => $topPicks,
            'newArraivals'     => $newArraivals,
            'productsCategory' => $productsCategory,
            'Promotion'        => $Promotion,
        ]);
    }
}
