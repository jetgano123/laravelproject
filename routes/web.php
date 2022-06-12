<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

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

<<<<<<< HEAD
Route::get('/',[PageController::class,'mainpage']);
Route::get('/login',[PageController::class,'login']);
Route::get('/cart',[PageController::class,'cart']);
Route::get('/wishlist',[PageController::class,'wishlist']);
Route::get('/shop',[PageController::class,'shop']);
Route::get('/detail',[PageController::class,'detail']);
Route::get('/addtocart',[PageController::class,'addtocart']);
Route::get('/deletecart',[PageController::class,'deletecart']);
Route::get('/addwishlist',[PageController::class,'addwishlist']);
Route::get('/removewishlist',[PageController::class,'removewishlist']);
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> vq
