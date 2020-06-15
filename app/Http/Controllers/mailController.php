<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\sendOrderMail as sendOrderMail;

class mailController extends Controller
{
    //
    public function sendOrder(Request $request){

        $numOrder = DB::select("SELECT srctp FROM view_home")

        $subject = "orden n°-".$numOrder;
        $for = "joelenrikesoteldo@gmail.com";
        
        Mail::to('joelenrikesoteldo@gmail.com','joel soteldo')
        ->send(new sendOrderMail());
    }
}
