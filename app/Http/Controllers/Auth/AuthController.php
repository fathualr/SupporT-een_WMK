<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('login', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
                if ($user->admin->admin_role === 'superadmin') {
                    return redirect('/super-admin');
                } elseif ($user->admin->admin_role === 'content admin') {
                    return redirect('/content-admin');
                }
            } elseif ($user->role === 'tenaga ahli') {
                return redirect('tenaga-ahli');
            } else {
                return redirect('/');
            }
        }

        return back();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }

    public function registrasi()
    {
        return view('registrasi', [
            "title" => "Registrasi"
        ]);
    }

    public function registration(RegisterRequest $request)
    {

        $user = User::create([
            'role' => 'pasien',
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'password' => Hash::make($request->password),
        ]);

        Pasien::create([
            'id_user' => $user->id,
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Registrasi berhasil, silakan login!');
    }

    public function registrasi_tenagaahli()
    {
        return view('daftar_tenaga_ahli', [
            "title" => "Registrasi Tenaga Ahli"
        ]);
    }

    public function profile()
    {
        return view('profile', [
            "title" => "Profile"
        ]);
    }
}
