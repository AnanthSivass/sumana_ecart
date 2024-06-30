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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
$prdMdlCtlr = 'App\Http\Controllers\Shopping\ProductController';
Route::get('/', $prdMdlCtlr.'@show')->name('product.show');
Route::get('/home', $prdMdlCtlr.'@show')->name('product.show');
Route::get('/product-details/{id}', $prdMdlCtlr.'@productDetail')->name('product.detail');
Route::get('/products-purchase/{id}', $prdMdlCtlr.'@productsPurchase')->name('products.purchase');
Route::post('/process-payment/{string}/{price}', $prdMdlCtlr.'@processPayment')->name('process.payment');
Route::get('/my-orders', $prdMdlCtlr.'@myOrders')->name('products.orders');

