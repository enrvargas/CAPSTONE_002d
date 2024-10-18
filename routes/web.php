<?php

use App\HTTP\controllers\ProductController;
use App\HTTP\controllers\UnascitaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/products', ProductController::class);




Route::resource('/unascitas', App\Http\Controllers\UnascitaController::class);
