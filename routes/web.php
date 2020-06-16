<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/getWebData', 'webconf_controller@index');

Route::post('/getShopItem', 'webconf_controller@shopItem');

Route::post('/getHomeData', 'home_controller@index');

Route::post('/getAboutus', 'webconf_controller@aboutus');

Route::post('/getProductData', 'product_controller@index');

Route::post('/getProductSearch', 'product_controller@productSearch');

Route::post('/getProductSearchHome', 'product_controller@productSearchHome');

Route::post('/getOffertProduct', 'product_controller@OffertProduct');

Route::post('/addProdutToCart', 'cart_controller@addToCart');

Route::post('/removeProdutToCart', 'cart_controller@removeToCart');

Route::post('/clearCart', 'cart_controller@clearCart');

Route::get('/saveAndSendOrder', 'orderController@saveAndSendOrder');

Route::get('/getaddProdutToCart', 'cart_controller@addToCart');

Route::post('/getProductsCart', 'cart_controller@getProductCart');

Route::get('/test', 'view_controller@test');

Route::get('/panel', 'view_controller@panel');

Route::get('/{any}', 'view_controller@index')->where('any','.*');