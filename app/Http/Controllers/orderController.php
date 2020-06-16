<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderMail as sendOrderMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class orderController extends Controller
{
    //
    public function saveAndSendOrder(Request $r){

    $order  =  [  
                'numOrder'       => 'gd-0001',
                'namePerson'     => 'Joel',
                'lastNamePerson' => 'Soteldo',
                'cellphoneNum'   => '04xx-555-55-55',
                'email'          => 'joelenrikesoteldo@gmail.com',
                'product'        => [   
                                        [
                                            'name'  => 'caraota',
                                            'price' => '50'
                                        ],
                                        [
                                            'name'  => 'coco',
                                            'price' => '25'
                                        ],
                                        [
                                            'name'  => 'asadito',
                                            'price' => '55'
                                        ],
                                        
                                    ],
                'total'          => '100'
                ]; 
        
        Mail::to('joelenrikesoteldo@gmail.com','joel soteldo')
        ->send(new sendOrderMail($order));
    }
}
