<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController; 

Route::get('/', function () {
    return view('pasien/homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot.index');
