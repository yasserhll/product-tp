<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

//Route::resource('users', UserController::class);



Route::resource('products', ProductController::class);

