<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AktivitasPribadi;
use Illuminate\Support\Facades\Auth;

class AktivitasPribadiController extends Controller
{
    
    public function daftarAktivitasPribadi()
    {
        $pasienId = Auth::user()->pasien->id; // Ambil ID pasien

        // Ambil data aktivitas pribadi
        $aktivitasPribadi = AktivitasPribadi::with('aktivitasPositif')
            ->where('id_pasien', $pasienId)
            ->get();
    
        return view('pasien/daftar_aktivitas_pribadi', [
            "title" => "Daftar Aktivitas Pribadi",
            "aktivitasPribadi" => $aktivitasPribadi
        ]);
    }

    public function updateAktivitasPribadi(Request $request)
    {
        $pasienId = Auth::user()->pasien->id;
        $selectedActivities = $request->input('aktivitas', []); // Daftar ID aktivitas yang dipilih (checkbox tercentang)
    
        // Hapus semua aktivitas pribadi sebelumnya untuk pengguna
        AktivitasPribadi::where('id_pasien', $pasienId)->delete();
    
        // Tambahkan kembali aktivitas yang dipilih
        foreach ($selectedActivities as $aktivitasId) {
            AktivitasPribadi::create([
                'id_pasien' => $pasienId,
                'id_aktivitas_positif' => $aktivitasId,
                'is_completed' => false,
            ]);
        }
    
        return redirect()->back()->with('success', 'Aktivitas pribadi berhasil diperbarui!');
    }

}
