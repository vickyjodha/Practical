<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\ProductController as Product;
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

Auth::routes(['verify' => true]);
Route::middleware('auth')->group(function () {
    // Route::get('/dashboard ', [Home::class, 'index'])->name('home');
    Route::view('/dashboard ', 'dashboard')->name('dashboard');
    Route::get('product/addproduct', [Product::class, 'Product'])->name('addproduct');
    Route::post('product/addproduct', [Product::class, 'addProduct'])->name('products');
});
