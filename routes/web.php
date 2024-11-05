<?php

use Illuminate\Support\Facades\Route;

// PASIEN
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

Route::get('/forum-diskusi', function () {
    return view('Pasien/forum_diskusi');
});

// TENAGA AHLI
Route::get('/penarikan-pendapatan', function () {
    return view('TenagaAhli/penarikan_pendapatan');
});

Route::get('/kelola-konten-edukatif', function () {
    return view('TenagaAhli/kelola_konten_edukatif');
});

Route::get('/percakapan-konsultasi-tenaga-ahli', function () {
    return view('TenagaAhli/percakapan_konsultasi');
});

Route::get('/forum-diskusi', function () {
    return view('Pasien/forum_diskusi');
});

Route::get('/daftar-aktivitas', function () {
    return view('pasien/daftar_aktivitas');
});

Route::get('/kustomisasi-aktivitas', function () {
    return view('pasien/kustomisasi_aktivitas');
});

Route::get('/teman-bot', function () {
    return view('pasien/chatbot');
});

Route::get('/jurnal-harian', function () {
    return view('pasien/jurnal');
});


// TENAGA AHLI
Route::get('/penarikan-pendapatan', function () {
    return view('TenagaAhli/penarikan_pendapatan');
});

Route::get('/kelola-konten-edukatif', function () {
    return view('TenagaAhli/kelola_konten_edukatif');
});

Route::get('/tambah-data-konten', function () {
    return view('TenagaAhli/tambah_data_konten_edukasi');

});
Route::get('/edit-data-konten', function () {
    return view('TenagaAhli/edit_data_konten_edukatif');
});

Route::get('/percakapan-konsultasi-tenaga-ahli', function () {
    return view('TenagaAhli/percakapan_konsultasi');
});


// SUPER SUPERADMIN 
Route::get('/dashboard-admin', function () {
    return view('Admin/dashboard');
});

Route::get('/data-administrator', function () {
    return view('Admin/data_administrator');
});

Route::get('/tambah-data-administrator', function () {
    return view('admin/tambah_data_administrator');

});

Route::get('/edit-data-administrator', function () {
    return view('admin/edit_data_administrator');
});

Route::get('/data-pasien', function () {
    return view('Admin/data_pasien');
});

Route::get('/tambah-data-pasien', function () {
    return view('admin/tambah_data_pasien');

});
Route::get('/edit-data-pasien', function () {
    return view('admin/edit_data_pasien');

});

Route::get('/data-tenaga-ahli', function () {
    return view('Admin/data_tenaga_ahli');
});

Route::get('/tambah-data-tenaga-ahli', function () {
    return view('admin/tambah_data_tenaga_ahli');

});

Route::get('/edit-data-tenaga-ahli', function () {
    return view('admin/edit_data_tenaga_ahli');

});


Route::get('/data-transaksi-konsultasi', function () {
    return view('Admin/data_transaksi_konsultasi');
});

Route::get('/pendapatan-admin', function () {
    return view('Admin/pendapatan_admin');
});


// ADMIN 2
Route::get('/dashboard-admin2', function () {
    return view('Admin/dashboard_2');
});

Route::get('/data-konten-edukatif', function () {
    return view('Admin/data_konten_edukatif');
});

Route::get('/tambah-data-konten-edukatif', function () {
    return view('admin/tambah_data_konten_edukatif');

});

Route::get('/edit-data-konten-edukatif', function () {
    return view('admin/edit_data_konten_edukatif');

});


Route::get('/data-forum-diskusi', function () {
    return view('Admin/data_forum_diskusi');
});

Route::get('/tambah-data-forum-diskusi', function () {
    return view('admin/tambah_data_forum_diskusi ');

});

Route::get('/edit-data-forum-diskusi', function () {
    return view('admin/edit_data_forum_diskusi');

});

// VIEW LAYOUT TEMPLATE ADMIN
Route::get('/admin2', function () {
    return view('layouts/main_admin2');
});

// SUPER ADMIN 
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

Route::get('/pendapatan-admin', function () {
    return view('Admin/pendapatan_admin');
});

Route::get('/data-daftar-aktivitas-positif', function () {
    return view('Admin/data_daftar_aktivitas_positif');
});

// ADMIN
Route::get('/dashboard-admin2', function () {
    return view('Admin/dashboard_2');
});

Route::get('/data-konten-edukatif', function () {
    return view('Admin/data_konten_edukatif');
});

Route::get('/data-forum-diskusi', function () {
    return view('Admin/data_forum_diskusi');
});
