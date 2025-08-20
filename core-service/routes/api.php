<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

Route::get('/mahasiswa', function () {
    return Mahasiswa::all();
});

Route::get('/mahasiswa/{id}', function ($id) {
    return Mahasiswa::findOrFail($id);
});