<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    Auth\AuthController,
    AdminController,
    PasienController,
    TenagaAhliController,
    RiwayatPendidikanTenagaAhliController,
    KontenEdukatifController,
    DiskusiController,
    ChatbotController,
    JurnalHarianController,
    DaftarAktivitasController,
    ForumController,
    KonsultasiController,
    TransaksiController,
    PendapatanController,
    AktivitasPositifController,
    KataKunciAktivitasController,
};


Route::get('/', function () {
    return view('pasien/homepage', ['title' => 'SupporT-een']);
});
Route::get('/login', [AuthController::class, 'login']);
Route::get('/registrasi', [AuthController::class, 'registrasi']);
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Pasien
Route::get('/chatbot', [ChatbotController::class, 'chatbot']);
Route::get('/jurnal-harian', [JurnalHarianController::class, 'jurnalHarian']);
Route::get('/konten-edukatif', [KontenEdukatifController::class, 'kontenEdukatif']);
Route::get('/konten-edukatif/artikel', [KontenEdukatifController::class, 'kontenArtikel']);
Route::get('/konten-edukatif/video', [KontenEdukatifController::class, 'kontenVideo']);
Route::get('/daftar-aktivitas-pribadi', [DaftarAktivitasController::class, 'daftarAktivitasPribadi']);
Route::get('/daftar-aktivitas-pribadi/kustomisasi', [DaftarAktivitasController::class, 'kustomisasiAktivitasPribadi']);
Route::get('/forum', [ForumController::class, 'forum']);
Route::get('/konsultasi', [KonsultasiController::class, 'konsultasi']);

// Tenaga Ahli
Route::get('/tenaga-ahli', function () {
    return view('tenagaAhli/homepage', ['title' => 'SupporT-een']);
});
Route::get('/tenaga-ahli/kelola-konten-edukatif', [KontenEdukatifController::class, 'tenagaAhliKontenEdukatif']);
Route::get('/tenaga-ahli/kelola-konten-edukatif/artikel', [KontenEdukatifController::class, 'tenagaAhliKontenArtikel']);
Route::get('/tenaga-ahli/kelola-konten-edukatif/video', [KontenEdukatifController::class, 'tenagaAhliKontenVideo']);
Route::get('/tenaga-ahli/kelola-konten-edukatif/tambah-konten', [KontenEdukatifController::class, 'tenagaAhliCreate']);
Route::get('/tenaga-ahli/percakapan-konsultasi', [KonsultasiController::class, 'tenagaAhliKonsultasi']);
Route::get('/tenaga-ahli/pendapatan', [PendapatanController::class, 'tenagaAhliPendapatan']);

// Admin
Route::get('/super-admin', [AdminController::class, 'superAdmin']);
Route::resource('/super-admin/user-admin', AdminController::class);
Route::resource('/super-admin/user-pasien', PasienController::class);
Route::resource('/super-admin/user-tenaga-ahli', TenagaAhliController::class);
Route::resource('/super-admin/riwayat-pendidikan-tenaga-ahli', RiwayatPendidikanTenagaAhliController::class);
Route::resource('/super-admin/transaksi', TransaksiController::class);
Route::get('/super-admin/pendapatan', [PendapatanController::class, 'adminPendapatan']);

Route::get('/content-admin', [AdminController::class, 'contentAdmin']);
Route::resource('/content-admin/konten-edukatif', KontenEdukatifController::class);
Route::resource('/content-admin/forum-diskusi',DiskusiController::class);
Route::resource('/content-admin/aktivitas-positif',AktivitasPositifController::class);
Route::resource('/content-admin/kata-kunci-aktivitas',KataKunciAktivitasController::class);
