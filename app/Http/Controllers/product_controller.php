<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class product_controller extends Controller
{
    //
    function index(Request $r)
    {
        
        $images             = '[
                                {
                                    "src"    : "http://'.$_SERVER['HTTP_HOST'].'/images/slider4.jpg"
                                },
                                {
                                    "src"    : "http://'.$_SERVER['HTTP_HOST'].'/images/slider2.jpg"
                                },
                                {
                                    "src"    : "http://'.$_SERVER['HTTP_HOST'].'/images/slider3.jpg"
                                },
                                {
                                    "src"    : "http://'.$_SERVER['HTTP_HOST'].'/images/slider1.jpg"
                                }
                            ]';

        // $images             = 
        $colum1 = '"productCode"';
        $productData = DB::select("select * from  view_productos where code = '".$r->productCode."'")[0];
        
        if(count($reviewpunt = DB::select("select * from  view_reviewpuntuacion where ".$colum1." = '".$r->productCode."'")) >= 1){
            $review           = DB::select("select * from  view_review where code = '".$r->productCode."'");
            $countReview      = $reviewpunt[0]->countreview;
            $puntation        = $reviewpunt[0]->puntation/$reviewpunt->countreview;
        }else{
            $review      = null;
            $reviewpunt  = null;
            $countReview = null;
            $puntation   = null;
        }
        
        
        
        return response()->json([
            'name'             => $productData->name,
            'shortDescription' => $productData->shortdescription,
            'description'      => $productData->description,
            'price'            => $productData->price ,
            'images'           => json_decode($images),
            'discount'         => $productData->discount,
            'countReview'      => $countReview,
            // 'review'           => json_decode($review),
            'puntation'        => $puntation,
            'materials'        => $productData->materials,
        ]);
    }

    function productSearch(){
            $productSearch = DB::select("select * from  view_productosbuscar order by code desc");

            return response()->json($productSearch, 200);

    }

    function productSearchHome(){
            $productSearch = DB::select("select * from  view_productosbuscar limit 3");

            return response()->json($productSearch, 200);

    }
    
    function OffertProduct(){
            $OffertProduct = '[
                {
                    "id" : 1,
                    "images" : "images/slider1.jpg"
                },
                {
                    "id" : 2,
                    "images" : "images/slider2.jpg"
                },
                {
                    "id" : 3,
                    "images" : "images/slider3.jpg"
                }
            ]';

        return response()->json(json_decode($OffertProduct));

    }
}
