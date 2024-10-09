<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pasien/homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/konten-artikel', function () {
    return view('Pasien/konten_artikel');
});

Route::get('/konten-video', function () {
    return view('Pasien/konten_video');
});