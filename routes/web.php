<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer\HomepageController;
use App\Http\Controllers\Seller\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});

//Authentication routes
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Buyer routes
Route::group(['as'=>'buyer.', 'prefix' => 'buyer', 'namespace' => 'Buyer', 'middleware'=> ['auth','buyer']],
function(){
    Route::get('/homepage',[HomepageController::class,'index'])->name('homepage');
});

//Seller routes
Route::group(['as'=>'seller.', 'prefix' => 'seller', 'namespace' => 'Seller', 'middleware'=> ['auth','seller']],
function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});

//Product routes
Route::get('/all-products',[ProductController::class,'index'])->name('products');
Route::post('/product/search', [ProductController::class, 'search'])->name('search');

//Profile route
Route::get('/buyer/profile',[ProfileController::class,'index'])->name('profile');
