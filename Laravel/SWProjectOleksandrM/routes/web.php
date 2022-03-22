<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('productlist', [ProductListController::class, 'productlist']);
Route::get('/product', [ProductController::class, 'product']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('image/{main}', 'HomeController@displayImage')->name('image.displayImage');