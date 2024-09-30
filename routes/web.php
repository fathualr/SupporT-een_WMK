<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contents/homepage');
});

Route::get('/layouts/main', function () {
    return view('layouts/main');
});