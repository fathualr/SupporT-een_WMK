<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AktivitasPositif;
use App\Models\Diskusi;
use App\Models\KontenEdukatif;
use App\Models\TenagaAhli;
use App\Models\Pasien;
use App\Models\TransaksiKonsultasi;
use App\Models\TransaksiLangganan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('pasien/homepage', [
            "title" => "SupporT-een"
        ]);
    }

    public function profile()
    {
        $userId = Auth::id(); // Ambil ID pengguna yang sedang login
        $user = User::find($userId); // Ambil data pengguna menggunakan model User
    
        return view('pasien/profile', [
            "title" => "Profile",
            "user" => $user,
            "remainingTime" => $user->userRemainingPremiumTime(), // Panggil fungsi langsung dari model
        ]);
    }

    public function tenagaAhli()
    {
        return view('tenagaAhli/homepage', [
            "title" => "SupporT-een"
        ]);
    }

    public function superAdmin()
    {
        $totalPasien = Pasien::count();
        $totalAdmin = Admin::count();
        $totalTenagaAhli = TenagaAhli::count();
        $totalTransaksi = TransaksiLangganan::count() + TransaksiKonsultasi::count();

        return view('admin/dashboard_super', [
            "title" => "Dashboard Super Admin",
            "totalPasien" => $totalPasien,
            "totalAdmin" => $totalAdmin,
            "totalTenagaAhli" => $totalTenagaAhli,
            "totalTransaksi" => $totalTransaksi,
        ]);
    }
    

    public function contentAdmin()
    {
        $totalArtikel = KontenEdukatif::where('tipe', 'artikel')->count();
        $totalVideo = KontenEdukatif::where('tipe', 'video')->count();
        $totalDiskusi = Diskusi::count();
        $totalAktivitasPositif = AktivitasPositif::count();

        return view('admin/dashboard_content', [
            "title" => "Dashboard Content Admin",
            "totalArtikel" => $totalArtikel,
            "totalVideo" => $totalVideo,
            "totalDiskusi" => $totalDiskusi,
            "totalAktivitasPositif" => $totalAktivitasPositif,
        ]);
    }

    public function mitra()
    {
        return view('kemitraan', [
            "title" => "Mitra"
        ]);
    }
}
