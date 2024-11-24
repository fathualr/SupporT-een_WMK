<?php

namespace App\Http\Controllers;

use App\Http\Requests\JurnalHarianRequest;
use App\Models\JurnalHarian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JurnalHarianController extends Controller
{

    public function jurnalHarian(Request $request, $id = null)
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();
        $idPasien = $user->pasien->id;
    
        // Mengambil daftar jurnal harian berdasarkan id_pasien, diurutkan berdasarkan waktu terakhir dibuat
        $jurnalHarianList = JurnalHarian::where('id_pasien', $idPasien)
            ->orderBy('created_at', 'desc')
            ->get();
    
        // Menyiapkan variabel untuk jurnal yang dipilih (jika ada)
        $selectedJurnal = null;
    
        // Jika ada ID jurnal yang diberikan, ambil jurnal yang sesuai
        if ($id) {
            $selectedJurnal = JurnalHarian::where('id', $id)
                ->where('id_pasien', $idPasien)
                ->first();
    
            // Jika jurnal tidak ditemukan atau bukan milik pasien yang login, kembalikan error
            if (!$selectedJurnal) {
                return redirect()->back()->with('error', 'Anda tidak memiliki akses ke jurnal ini.');
            }
        }
    
        // Kembalikan data ke view dengan daftar jurnal dan jurnal yang dipilih
        return view('pasien/jurnal_harian', [
            'title' => 'Jurnal Harian',
            'jurnalHarianList' => $jurnalHarianList,
            'selectedJurnal' => $selectedJurnal,
        ]);
    }
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JurnalHarianRequest $request)
    {
        // Mendapatkan user yang sedang login dan ID pasien
        $user = Auth::user();
        $idPasien = $user->pasien->id;

        // Validasi tambahan: Pastikan salah satu diisi
        if (empty($request->judul) && empty($request->isi)) {
            return redirect()->back()->with('error','Judul atau Isi jurnal harus diisi.',
            )->withInput();
        }

        $kontenData = [
            'id_pasien' => $idPasien,
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];

        // Menyimpan jurnal harian
        $jurnal = JurnalHarian::create($kontenData);

        // Redirect ke halaman daftar jurnal dengan ID jurnal baru
        return redirect()->route('jurnalHarian.index', ['id' => $jurnal->id])
            ->with('success', 'Jurnal berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JurnalHarianRequest $request, $id)
    {
        // Validasi tambahan: Pastikan salah satu diisi
        if (empty($request->judul) && empty($request->isi)) {
            return redirect()->back()->with('error', 'Judul atau Isi jurnal harus diisi.')->withInput();
        }
    
        // Mendapatkan user yang sedang login dan ID pasien
        $user = Auth::user();
        $idPasien = $user->pasien->id;
    
        // Temukan jurnal berdasarkan ID
        $jurnal = JurnalHarian::where('id', $id)->where('id_pasien', $idPasien)->first();
    
        // Pastikan jurnal ditemukan dan milik pasien yang login
        if (!$jurnal) {
            return redirect()->route('jurnalHarian.index')
                ->with('error', 'Jurnal tidak ditemukan atau Anda tidak memiliki akses.');
        }
    
        // Perbarui data jurnal
        $jurnal->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
    
        // Redirect ke halaman daftar jurnal dengan ID jurnal yang diperbarui
        return redirect()->back()->with('success', 'Jurnal berhasil diperbarui.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurnal = JurnalHarian::findOrFail($id);
    
        $jurnal->delete();
    
        return redirect()->route('jurnalHarian.index')->with('success', 'Jurnal berhasil dihapus.');
    }
}
