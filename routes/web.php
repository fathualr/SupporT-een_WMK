<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pasien/homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar-aktivitas', function () {
    return view('pasien/daftar_aktivitas');
});

Route::get('/kustomisasi-aktivitas', function () {
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

Route::get('/tambahdatakontenedukatif', function () {
    return view('admin/tambah_data_konten_edukatif');

});

Route::get('/editdatakontenedukatif', function () {
    return view('admin/edit_data_konten_edukatif');

});

Route::get('/tambahdataforumdiskusi', function () {
    return view('admin/tambah_data_forum_diskusi ');

});

Route::get('/editdataforumdiskusi', function () {
    return view('admin/edit_data_forum_diskusi');

});

Route::get('/tambahdatakonten', function () {
    return view('TenagaAhli/tambah_data_konten_edukasi');

});
Route::get('/editdatakonten', function () {
    return view('TenagaAhli/edit_data_konten_edukatif');

});