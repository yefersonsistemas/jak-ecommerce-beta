<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class product_controller extends Controller
{
    //
    function index()
    {
        
        // $name             = 'nombre del producto';
        // $shortDescription = 'breve descripcion';
        // $description      = 'descripcion completa';
        // $images             = '[
        //                         {
        //                             "src"    : "images/slider4.jpg"
        //                         },
        //                         {
        //                             "src"    : "images/slider2.jpg"
        //                         },
        //                         {
        //                             "src"    : "images/slider3.jpg"
        //                         },
        //                         {
        //                             "src"    : "images/slider1.jpg"
        //                         }
        //                     ]';
        // $price            = '50.00';
        // $discount         = '25.00';
        // $countReview      = '50';
        // $review           = '[
        //                         {
        //                             "name"    : "pedro perez",
        //                             "avatar": "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        //                             "comment"    : "buenisimo",
        //                             "puntation" : 2
        //                         },
        //                         {
        //                             "name"    : "sandra perez",
        //                             "avatar": "https://cdn.vuetifyjs.com/images/lists/2.jpg",
        //                             "comment"    : "bueno",
        //                             "puntation" : 1
        //                         }
        //                     ]';
        // $puntation        = 0;
        // $materials        = 'materiales';

        // $images             = 
        $colum1 = '"productCode"';
        $reviewpunt = DB::select("select * from  view_reviewpuntuacion where ".$colum1." = 'PRD-001'")[0];
        $countReview      = $reviewpunt->countreview;
        $review           = DB::select("select * from  view_review where code = 'PRD-001'");
        $puntation        = $reviewpunt->puntation/$reviewpunt->countreview;
        $productData = DB::select("select * from  view_productos where code = 'PRD-001'")[0];
        return response()->json([$productData,$review,$countReview,$puntation], 200);
        // return response()->json(, 200);
        // return response()->json([
        //     'name'             => $name,
        //     'shortDescription' => $shortDescription,
        //     'description'      => $description,
        //     'price'            => $price ,
        //     'images'           => json_decode($images),
        //     'discount'         => $discount,
        //     'countReview'      => $countReview,
        //     'review'           => json_decode($review),
        //     'puntation'        => $puntation,
        //     'materials'        => $materials,
        // ]);
    }

    function productSearch(){
            $productSearch = DB::select("select * from  view_productosbuscar");

            return response()->json($productSearch, 200);

    }
    function OffertProduct(){
            // $OffertProduct = '[
            //     {
            //         "id" : 1,
            //         "images" : "https://picsum.photos/1920/1080?random",
            //         "message" : "10% descuento"
            //     },
            //     {
            //         "id" : 2,
            //         "images" : "https://picsum.photos/1920/1080?random",
            //         "message" : "30% descuento"
            //     },
            //     {
            //         "id" : 3,
            //         "images" : "https://picsum.photos/1920/1080?random",
            //         "message" : "40% descuento"
            //     }
            // ]';

            $OffertProduct = DB::select("select * from  view_descuento");

        // return response()->json(json_decode($OffertProduct));
        return response()->json($OffertProduct, 200);

    }
}
