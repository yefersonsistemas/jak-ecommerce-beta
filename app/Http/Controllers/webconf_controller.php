<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class webconf_controller extends Controller
{
    //
    function index ()
    {
        $name = 'jak solutions';
        $shortName = "jak";
        return response()->json([
            'name' => $name,
            'shortName' => $shortName
        ]);
    }

    function shopItem(){

        $class = DB::select("select * from  view_productosclass");
        $colum1 = '"code"';
        $auxclass = [];
        foreach ($class as $key =>  $value) {
            // return $value;
            if(count($type =  DB::select("select * from  view_productostype where code = '".$value->code."'")) >= 1)
            {
                $type =  DB::select("select * from view_productostype where code = '".$value->code."'");
                
                $auxchildren = '{
                                "code": "'.$value->code.'",
                                "monbreclass": "'. $value->monbreclass .'",
                                "children" : '.json_encode($type).'}';
                $children = json_decode($auxchildren);
                // return $aux;
                array_push($auxclass,$children);
                
            }
            else
            {
                $auxchildren = '{
                    "code": "'.$value->code.'",
                    "monbreclass": "'. $value->monbreclass .'",
                    "children" : []}';
                $children = json_decode($auxchildren);
                // return $aux;
                array_push($auxclass,$children);
            }
        }
        $class = $auxclass;
        return response()->json($class);
    }
}
