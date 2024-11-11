<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class KontenEdukatifController extends Controller
{

    public function kontenEdukatif($tipe = null)
    {
        return view('pasien/konten_edukatif', [
            "title" => "Konten Edukatif",
            "tipe" => null
        ]);
    }
    
    public function kontenArtikel()
    {
        return view('pasien/konten_artikel', [
            "title" => "Konten Artikel"
        ]);
    }
    
    public function kontenVideo()
    {
        return view('pasien/konten_video', [
            "title" => "Konten Video"
        ]);
    }

    public function tenagaAhliKontenEdukatif($tipe = null)
    {
        return view('tenagaAhli/kelola_konten_edukatif', [
            "title" => "Kelola Konten Edukatif",
            'tipe' => null
        ]);
    }
        
    public function tenagaAhliKontenArtikel()
    {
        return view('tenagaAhli/kelola_konten_artikel', [
            "title" => "Kelola Konten Artikel"
        ]);
    }
    
    public function tenagaAhliKontenVideo()
    {
        return view('tenagaAhli/kelola_konten_video', [
            "title" => "Kelola Konten Video"
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index($tipe = null)
    {
        $kontenEdukasi = Konten::with('User')->paginate(10);
        return view('admin/data_konten_edukatif', [
            "title" => "Kelola Konten Edukatif",
            "tipe" => null,
            "kontenEdukasi" => $kontenEdukasi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/form/tambah_data_konten_edukatif', [
            "title" => "Tamabah Data Konten Edukatif"
        ]);
    }

    public function tenagaAhliCreate()
    {
        return view('tenagaAhli/form/tambah_data_konten_edukatif', [
            "title" => "Tambah Konten Edukatif"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        $auth = Auth::user()->id;

        try {
            // if ($request->hasFile('foto_profil')) {
            //     $foto_profil = $request->file('foto_profil')->store('image/foto_profil', 'public');
            // }

            Konten::create([
                'id_user'=> $request->$auth,
                'judul' => $request->judul,
                'tipe' => $request->tipe,
                'thumbnail' => $request->thumbnail,
                'sumber' => $request->sumber,
                'isi_artikel' => $request->isi_artikel,
                'link_youtube' => $request->link_youtube,
            ]);

            DB::commit();
            $totalKonten = Konten::count();
            $perPage = 10;
            $lastPage = ceil($totalKonten / $perPage);

            return redirect()->route('konten-edukatif.index', ['page' => $lastPage])
                            ->with('success', 'Data konten berhasil ditambahkan!');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Data konten gagal ditambahkan! Pesan error: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kontenEdukasi = Konten::with('User')->findOrFail($id);
        return view('admin/template/data_konten_edukatif', [
            "title" => "Kelola Konten Edukatif",
            "tipe" => null,
            "kontenEdukasi" => $kontenEdukasi,
        ]);
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
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

    $auth = Auth::user()->id;

    try {
        $kontenEdukasi = Konten::findOrFail($id);

        // if ($request->hasFile('thumbnail')) {
        //     // Hapus thumbnail lama jika ada
        //     if ($kontenEdukasi->thumbnail) {
        //         Storage::disk('public')->delete($kontenEdukasi->thumbnail);
        //     }

        //     // Simpan thumbnail baru
        //     $thumbnail = $request->file('thumbnail')->store('image/foto_profil', 'public');
        //     $kontenEdukasi->thumbnail = $thumbnail;
        // }

        // Update konten edukatif
        $kontenEdukasi->update([
            'id_user' => $auth,
            'judul' => $request->judul,
            'tipe' => $request->tipe,
            'sumber' => $request->sumber,
            'isi_artikel' => $request->isi_artikel,
            'link_youtube' => $request->link_youtube,
        ]);

        DB::commit();

        return redirect()->route('konten-edukatif.index')
                        ->with('success', 'Data konten berhasil diperbarui!');

    } catch (\Exception $e) {
        DB::rollback();
        return redirect()->back()->with('error', 'Data konten gagal diperbarui! Pesan error: ' . $e->getMessage());
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $konten = Konten::findOrFail($id);

    if ($konten->thumbnail) {
        Storage::disk('public')->delete($konten->thumbnail);
    }

    $kontenDeleted = $konten->delete();

    if ($kontenDeleted) {
        return redirect()->back()->with('success', 'Data konten berhasil dihapus!');
    } else {
        return redirect()->back()->with('error', 'Data konten gagal dihapus!');
    }
}
}
