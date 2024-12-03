<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarAktivitasController extends Controller
{
    
    public function daftarAktivitasPribadi()
    {
        return view('pasien/daftar_aktivitas_pribadi', [
            "title" => "Daftar Aktivitas Pribadi"
        ]);
    }

    public function kustomisasiAktivitasPribadi()
    {
        return view('pasien/daftar_kustomisasi_aktivitas', [
            "title" => "Kustomisasi Aktivitas"
        ]);
    }

}
