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
        $colum1 = '"codeclass"';
        $auxclass = [];
        foreach ($class as $key =>  $value) {
            if(count($type =  DB::select("select * from  view_productostype where ".$colum1." = '".$value->code."'")) >= 1)
            {
                $type =  DB::select("select * from view_productostype where ".$colum1." = '".$value->code."'");
                
                $auxchildren = '{
                                "id": "'.$value->code.'",
                                "name": "'. $value->name .'",
                                "children" : '.json_encode($type).'}';
                $children = json_decode($auxchildren);
                // return $aux;
                array_push($auxclass,$children);
                
            }
            else
            {
                $auxchildren = '{
                    "id": "'.$value->code.'",
                    "name": "'. $value->name .'",
                    "children" : []}';
                $children = json_decode($auxchildren);
                // return $aux;
                array_push($auxclass,$children);
            }
        }
        $class = $auxclass;
        return response()->json($class);
    }

    function aboutus ()
    {
        $title             = 'jak solutions';
        $slogan            = "producir, hacer, crear, inventar,";
        $imgFirstBanner    = "https://picsum.photos/1920/1080?random";
        $titleFirstPost    = "mision";
        $contentFirstPost  = "somo una gran empresa";
        $imgSecondBanner   = "https://picsum.photos/1920/1080?random";
        $titleSecondPost   = "vision";
        $contentSecondPost = "llegaremos lejos";

        return response()->json([
            'title'             => $title,
            'slogan'            => $slogan,
            'imgFirstBanner'    => $imgFirstBanner,
            'titleFirstPost'    => $titleFirstPost,
            'contentFirstPost'  => $contentFirstPost,
            'imgSecondBanner'   => $imgSecondBanner,
            'titleSecondPost'   => $titleSecondPost,
            'contentSecondPost' => $contentSecondPost
        ]);
    }
}
