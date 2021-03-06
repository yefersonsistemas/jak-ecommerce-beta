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

Route::post('/getProductData', 'product_controller@index');

Route::post('/getProductSearch', 'product_controller@productSearch');

Route::post('/getOffertProduct', 'product_controller@OffertProduct');

Route::get('/panel', 'view_controller@panel');

Route::get('/{any}', 'view_controller@index')->where('any','.*');