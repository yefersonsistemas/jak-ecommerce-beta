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
        $shopItem =  '[
            {
                "name" : "T-Shirts",
                "code" : "shop-001"
            },
            {
                "name" : "Jackets",
                "code" : "shop-002"
            },
            {
                "name" : "Shirts",
                "code" : "shop-003"
            },
            {
                "name" : "Jeans",
                "code" : "shop-004"
            },
            {
                "name" : "Shoes",
                "code" : "shop-005"
            },
            {
                "name" : "Nails",
                "code" : "shop-005"
            }
        ]';
        return response()->json([
            'name' => $name,
            'shortName' => $shortName,
            'shopItem' => json_decode($shopItem)
        ]);
    }
}
