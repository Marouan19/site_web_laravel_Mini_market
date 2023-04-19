<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Informatic_controller;
use App\Http\Controllers\SportController;
use App\Http\Controllers\SupermarcheController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsController2;
use App\Http\Controllers\ProductsController3;


Route::resource('informatic', informatic_controller::class); 
Route::resource('marche', SupermarcheController::class); 
Route::resource('sport', SportController::class); 
Route::get('/admin', function () {
    return view('welcome');
});


////user

Route::get('/', function () {
    return view('welcome1');
});
Route::resource('products',ProductsController::class);
Route::resource('products2',ProductsController2::class);
Route::resource('products3',ProductsController3::class);

Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');

Route::get('/sign', function () {
    return view('sign');
});
Route::get('/login', function () {
    return view('login');
});