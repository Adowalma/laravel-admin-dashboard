<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/customers',[App\Http\Controllers\CustomersController::class, 'index']);
