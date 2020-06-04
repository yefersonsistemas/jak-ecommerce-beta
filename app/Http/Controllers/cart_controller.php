<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cart_controller extends Controller
{
    //

    function addToCart(Request $r)
    {
    //     return $_SERVER['REMOTE_ADDR'];
    //     DB::select("select * from  addtocart(
	// 		'".$r->codigoPersona."',
	// 		'".$r->cedula."',
    //         '".$r->primerNombre."',
	// 		'".$r->segundoNombre."',
	// 		'".$r->primerApellido."',
	// 		'".$r->segundoApellido."',
	// 		'".$r->asignado."',
    //         '".$user['str_nombreUsuario']."')");
        $r->session()->forget('cart');
        if(session()->exists("cart")){
            $auxCart = session("cart");
            $r->session()->forget('cart');
            foreach ($auxCart as $key =>  $value) {
                if($r->productsCart['id'] == $value['id']){
                    $value[$key]['quantity'] += $r->productsCart['quantity'];
                    $r->session()->push('cart' , $value);
                }
                else{
                    $r->session()->push('cart' , $r->productsCart);
                }
            }
            return $auxCart;
        }else{
            $r->session()->push('cart' , $r->productsCart);
        }
        return session("cart");
    }
    function clearCart(Request $r){
        $r->session()->forget('cart');
    }
    function getProductCart()
    {
        return session("cart");
    }
}
