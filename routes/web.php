<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pasien/homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftaraktivitas', function () {
    return view('pasien/daftar_aktivitas');
});