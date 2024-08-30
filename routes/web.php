<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect('/products');
});

Route::resource('/products', ProductController::class);
Route::get('/profile', [ProfileController::class, 'index']);