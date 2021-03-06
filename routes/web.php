<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EmailController;



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
    return view('product');    
});
    
Route::get('/create',[UserController::class,'create']);
Route::post('/index',[UserController::class,'index']);
Route::get('/products',[ProductsController::class,'products']);
Route::post('/addproducts',[ProductsController::class,'addproducts']);
Route::get('/show',[ProductsController::class,'show']);


