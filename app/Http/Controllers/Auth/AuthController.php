<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login()
    {
        return view('login', [
            "title" => "Login"
        ]);
    }

    public function registrasi()
    {
        return view('registrasi', [
            "title" => "Registrasi"
        ]);
    }
    
}
