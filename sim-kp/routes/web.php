<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KpController;
use App\Http\Controllers\PengajuanKPController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kp', [KpController::class, 'index']);

Route::resource('pengajuan-kp', PengajuanKPController::class);