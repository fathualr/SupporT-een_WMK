<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\GuestOrPasienMiddleware;
use App\Http\Controllers\{
    Auth\AuthController,
    MainController,
    AdminController,
    PasienController,
    TenagaAhliController,
    RiwayatPendidikanTenagaAhliController,
    KontenEdukatifController,
    DiskusiController,
    ChatbotController,
    JurnalHarianController,
    AktivitasPribadiController,
    ForumController,
    KonsultasiController,
    TransaksiController,
    PendapatanController,
    AktivitasPositifController,
    KataKunciAktivitasController,
    KataKunciKontenController,
    BalasanController,
    SubscriptionController,
    TransaksiLanggananController,
};

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/registrasi', [AuthController::class, 'registrasi']);
});

Route::get('/mitra', [MainController::class, 'mitra']);
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([GuestOrPasienMiddleware::class])->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/konten-edukatif/{id?}', [KontenEdukatifController::class, 'kontenEdukatif'])->name('kontenEdukatif');
});
// Pasien
Route::middleware(['auth', RoleMiddleware::class . ':pasien'])->group(function () {
        // Midtrans route ->
    Route::post('/generate-snaptoken', [SubscriptionController::class, 'generateSnapToken'])->name('generate.snaptoken');
    Route::post('/process-payment/{transaction}', [SubscriptionController::class, 'processPayment'])->name('process.payment');
    Route::post('/cancel-transaction/{transaction}', [SubscriptionController::class, 'cancelTransaction'])->name('cancel.transaction');
        // <-
    Route::get('/chatbot/{id?}', [ChatbotController::class, 'chatbot'])->name('chatbot.index');
    Route::resource('/chatbot', ChatbotController::class)->except(['index', 'create', 'edit']);
    Route::get('/jurnal-harian', [JurnalHarianController::class, 'jurnalHarian']);
    Route::get('/daftar-aktivitas-pribadi', [AktivitasPribadiController::class, 'daftarAktivitasPribadi']);
    Route::get('/daftar-aktivitas-pribadi/kustomisasi', [AktivitasPositifController::class, 'kustomisasiAktivitasPribadi']);
    Route::post('/aktivitas-pribadi', [AktivitasPribadiController::class, 'updateAktivitasPribadi'])->name('aktivitas-pribadi.update');
    Route::get('/forum', [ForumController::class, 'forum']);
    Route::get('/konsultasi', [KonsultasiController::class, 'konsultasi']);
});

// Tenaga Ahli
Route::prefix('tenaga-ahli')->middleware(['auth', RoleMiddleware::class . ':tenaga ahli'])->group(function () {
    Route::get('/', [MainController::class, 'tenagaAhli']);
    Route::get('/kelola-konten-edukatif', [KontenEdukatifController::class, 'tenagaAhliKontenEdukatif']);
    Route::get('/kelola-konten-edukatif/artikel', [KontenEdukatifController::class, 'tenagaAhliKontenArtikel']);
    Route::get('/kelola-konten-edukatif/video', [KontenEdukatifController::class, 'tenagaAhliKontenVideo']);
    Route::get('/kelola-konten-edukatif/tambah-konten', [KontenEdukatifController::class, 'tenagaAhliCreate']);
    Route::get('/percakapan-konsultasi', [KonsultasiController::class, 'tenagaAhliKonsultasi']);
    Route::get('/pendapatan', [PendapatanController::class, 'tenagaAhliPendapatan']);
});

// Admin
Route::prefix('super-admin')->middleware(['auth', RoleMiddleware::class . ':superadmin'])->group(function () {
    Route::get('/', [MainController::class, 'superAdmin']);
    Route::resource('/user-admin', AdminController::class);
    Route::resource('/user-pasien', PasienController::class);
    Route::resource('/user-tenaga-ahli', TenagaAhliController::class);
    Route::resource('/riwayat-pendidikan-tenaga-ahli', RiwayatPendidikanTenagaAhliController::class);
    Route::resource('/transaksi-langganan', TransaksiLanggananController::class);
    Route::resource('/transaksi', TransaksiController::class);
    Route::get('/pendapatan', [PendapatanController::class, 'adminPendapatan']);
});

Route::prefix('content-admin')->middleware(['auth', RoleMiddleware::class . ':content admin'])->group(function () {
    Route::get('/', [MainController::class, 'contentAdmin']);
    Route::resource('/konten-edukatif', KontenEdukatifController::class);
    Route::resource('/kata-kunci-konten', KataKunciKontenController::class);
    Route::resource('/diskusi',DiskusiController::class);
    Route::get('/diskusi/{id}/balasan', [DiskusiController::class, 'showBalasan'])->name('diskusi.showBalasan');
    Route::resource('/balasan',BalasanController::class);
    Route::resource('/aktivitas-positif',AktivitasPositifController::class);
    Route::resource('/kata-kunci-aktivitas',KataKunciAktivitasController::class);
});