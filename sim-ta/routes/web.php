<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ta', [TaController::class, 'index']);