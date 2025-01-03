<?php
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/help', function () {
    return view('help');
});

Route::resource('customers', CustomersController::class);
Route::resource('settings',  SettingsController::class);
