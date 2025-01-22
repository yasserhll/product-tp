<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\CountryController;

Route::resource('countries', CountryController::class);




Route::resource('products', ProductController::class);


Route::get('/', function () {
    return view('home');
});


