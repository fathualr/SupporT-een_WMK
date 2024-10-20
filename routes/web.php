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

Route::get('/kustomisasiaktivitas', function () {
    return view('pasien/kustomisasi_aktivitas');
});

Route::get('/tambahdatapasien', function () {
    return view('admin/tambah_data_pasien');

});
Route::get('/editdatapasien', function () {
    return view('admin/edit_data_pasien');

});

Route::get('/tambahdatatenagaahli', function () {
    return view('admin/tambah_data_tenaga_ahli');

});

Route::get('/editdatatenagaahli', function () {
    return view('admin/edit_data_tenaga_ahli');

});

Route::get('/tambahdataadministrator', function () {
    return view('admin/tambah_data_administrator');

});

Route::get('/editdataadministrator', function () {
    return view('admin/edit_data_administrator');

});