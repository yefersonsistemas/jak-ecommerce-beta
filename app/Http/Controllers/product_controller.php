<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product_controller extends Controller
{
    //
    function index()
    {
        $name             = 'nombre del producto';
        $shortDescription = 'breve descripcion';
        $description      = 'descripcion completa';
        $images             = '[
                                {
                                    "src"    : "images/slider4.jpg"
                                },
                                {
                                    "src"    : "images/slider2.jpg"
                                },
                                {
                                    "src"    : "images/slider3.jpg"
                                },
                                {
                                    "src"    : "images/slider1.jpg"
                                }
                            ]';
        $price            = '50.00';
        $discount         = '25.00';
        $countReview      = '50';
        $review           = '[
                                {
                                    "name"    : "pedro perez",
                                    "avatar": "https://cdn.vuetifyjs.com/images/lists/2.jpg",
                                    "comment"    : "buenisimo",
                                    "puntation" : 2
                                },
                                {
                                    "name"    : "sandra perez",
                                    "avatar": "https://cdn.vuetifyjs.com/images/lists/2.jpg",
                                    "comment"    : "bueno",
                                    "puntation" : 1
                                }
                            ]';
        $puntation        = 0;
        $materials        = 'materiales';

        
        return response()->json([
            'name'             => $name,
            'shortDescription' => $shortDescription,
            'description'      => $description,
            'price'            => $price ,
            'images'           => json_decode($images),
            'discount'         => $discount,
            'countReview'      => $countReview,
            'review'           => json_decode($review),
            'puntation'        => $puntation,
            'materials'        => $materials,
        ]);
    }

    function productSearch(){

            $name     = 'BLACK TEE';
            $type     = 'Jackets';
            $price    = '18.00';
            $imageSrc = 'images/1.jpg';

            $productSearch = '[
                {
                    "name"   : "'.$name.'",
                    "type"   : "'.$type.'",
                    "price"  : "'.$price.'" ,
                    "images" : "'.$imageSrc.'"
                },
                {
                    "name"   : "'.$name.'",
                    "type"   : "'.$type.'",
                    "price"  : "'.$price.'" ,
                    "images" : "'.$imageSrc.'"
                },
                {
                    "name"   : "'.$name.'",
                    "type"   : "'.$type.'",
                    "price"  : "'.$price.'" ,
                    "images" : "'.$imageSrc.'"
                },
                {
                    "name"   : "'.$name.'",
                    "type"   : "'.$type.'",
                    "price"  : "'.$price.'" ,
                    "images" : "'.$imageSrc.'"
                }
            ]';

        return response()->json(json_decode($productSearch));
        
    }
}
