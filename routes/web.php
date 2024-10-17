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

Route::get('/konsultasi', function () {
    return view('Pasien/konsultasi');
});

Route::get('/percakapan-konsultasi', function () {
    return view('Pasien/percakapan_konsultasi');
});

// VIEW LAYOUT TEMPLATE ADMIN
Route::get('/admin', function () {
    return view('layouts/main_admin');
});

Route::get('/forum-diskusi', function () {
    return view('Pasien/forum_diskusi');
});