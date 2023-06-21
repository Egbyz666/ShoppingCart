<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\PemesananController;


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

//Auth 
Route::get('/', function () {
    return view('welcome');
})->name('login');
route::get('daftar',[UserController::class,'daftar']);
route::post('daftar/create',[UserController::class,'create']);
route::post('auth',[UserController::class,'auth']);
route::get('logout',[UserController::class,'logout']);

//Data Produk
route::get('produk',[ProdukController::class,'show']);
route::get('produk/addProduk',[ProdukController::class,'add']);
route::get('produk/view',[ProdukController::class,'view']);
route::get('produk/delete/{id}',[ProdukController::class,'delete']);
route::get('produk/edit/{id}',[ProdukController::class,'edit']);
route::post('produk/update/{}',[ProdukController::class,'update']);
route::post('produk/create',[ProdukController::class,'create']);

route::get('shoppingCart',[ShopController::class,'show']);
route::get('produk/option/{id}',[ShopController::class,'edit']);

// Profile Seller
route::get('produk/profile',[ProfileController::class,'add']);
route::post('profile/create',[ProfileController::class,'create']);
route::get('profile/edit',[ProfileController::class,'edit']);
route::post('profile/update',[ProfileController::class,'update']);

// Formulir Wa

route::get('formulir',[FormulirController::class,'show']);

// Pemesanan

route::post('pemesanan/create',[PemesananController::class,'create']);

