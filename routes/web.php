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

Route::get('/penarikan-pendapatan', function () {
    return view('TenagaAhli/penarikan_pendapatan');
});

Route::get('/dashboard-admin', function () {
    return view('Admin/dashboard');
});

Route::get('/data-administrator', function () {
    return view('Admin/data_administrator');
});

Route::get('/data-pasien', function () {
    return view('Admin/data_pasien');
});

Route::get('/data-tenaga-ahli', function () {
    return view('Admin/data_tenaga_ahli');
});

Route::get('/data-transaksi-konsultasi', function () {
    return view('Admin/data_transaksi_konsultasi');
});
