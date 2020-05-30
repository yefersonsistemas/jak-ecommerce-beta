<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $shopItem =  '[
            {
                "name" : "T-Shirts",
                "code" : "shop-001",
                "fatherCode": null,
                "children" : [
                    {
                        "name" : "T-Shirts",
                        "code" : "shop-007",
                        "fatherCode": "shop-001",
                        "children" : []
                    },
                    {
                        "name" : "Jackets",
                        "code" : "shop-008",
                        "fatherCode": "shop-001",
                        "children" : []
                    }
                ]
            },
            {
                "name" : "Jackets",
                "code" : "shop-002",
                "fatherCode": null,
                "children" : [
                    {
                        "name" : "Shirts",
                        "code" : "shop-009",
                        "fatherCode": "shop-002",
                        "children" : []
                    },
                    {
                        "name" : "Jeans",
                        "code" : "shop-010",
                        "fatherCode": "shop-002",
                        "children" : []
                    }
                ]
            },
            {
                "name" : "Shirts",
                "code" : "shop-003",
                "fatherCode": null,
                "children" : [
                    {
                        "name" : "Shoes",
                        "code" : "shop-011",
                        "fatherCode": "shop-003",
                        "children" : []
                    }
                ]
            },
            {
                "name" : "Jeans",
                "code" : "shop-004",
                "fatherCode": null,
                "children" : [
                    {
                        "name" : "Nails",
                        "code" : "shop-012",
                        "fatherCode": "shop-004",
                        "children" : []
                    }
                ]
            },
            {
                "name" : "Shoes",
                "code" : "shop-005",
                "fatherCode": null,
                "children" : []
            },
            {
                "name" : "Nails",
                "code" : "shop-005",
                "fatherCode": null,
                "children" : []
            }
        ]';
        return response()->json(json_decode($shopItem)
        );
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
