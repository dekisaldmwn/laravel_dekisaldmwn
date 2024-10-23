<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\RumahsakitController;

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('rumahsakit', RumahsakitController::class);
    Route::resource('pasien', PasienController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('auth.login');
});
