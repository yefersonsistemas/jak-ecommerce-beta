<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_controller extends Controller
{
    //
    function index ()
    {
        $title = 'jak solutions';
        return view('shipitTemplate',[
            'title' => $title
        ]);
    }

    function panel ()
    {
        $title = 'template';
        return view('panel_index',[
            'title' => $title
        ]);
    }

    function test ()
    {
        $title = 'template';
        return view('test',[
            'title' => $title
        ]);
    }
}
