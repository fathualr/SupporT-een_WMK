<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController; 
use App\Http\Controllers\JournalController;

Route::get('/', function () {
    return view('pasien/homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot.index');
Route::get('/jurnal-harian', [JournalController::class, 'index'])->name('journal.index');

