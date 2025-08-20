<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KpController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kp', [KpController::class, 'index']);