<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products = config("products.products");
    // dd($products);
    $data = [
        'products' => $products
    ];
    return view('home', $data);
})->name('home');

Route::get('/donna', function () {
    return view('woman');
})->name('woman');

Route::get('/uomo', function () {
    return view('man');
})->name('man');

Route::get('/bambini', function () {
    return view('child');
})->name('child');
