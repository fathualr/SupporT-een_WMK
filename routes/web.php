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

Route::get('/tambah-data-pasien', function () {
    return view('admin/tambah_data_pasien');

});
Route::get('/edit-data-pasien', function () {
    return view('admin/edit_data_pasien');

});

Route::get('/tambah-data-tenaga-ahli', function () {
    return view('admin/tambah_data_tenaga_ahli');

});

Route::get('/edit-data-tenaga-ahli', function () {
    return view('admin/edit_data_tenaga_ahli');

});

Route::get('/tambah-data-administrator', function () {
    return view('admin/tambah_data_administrator');

});

Route::get('/edit-data-administrator', function () {
    return view('admin/edit_data_administrator');

});

Route::get('/tambah-data-konten-edukatif', function () {
    return view('admin/tambah_data_konten_edukatif');

});

Route::get('/edit-data-konten-edukatif', function () {
    return view('admin/edit_data_konten_edukatif');

});

Route::get('/tambah-data-forum-diskusi', function () {
    return view('admin/tambah_data_forum_diskusi ');

});

Route::get('/edit-data-forum-diskusi', function () {
    return view('admin/edit_data_forum_diskusi');

});

Route::get('/tambah-data-konten', function () {
    return view('TenagaAhli/tambah_data_konten_edukasi');

});
Route::get('/edit-data-konten', function () {
    return view('TenagaAhli/edit_data_konten_edukatif');

});