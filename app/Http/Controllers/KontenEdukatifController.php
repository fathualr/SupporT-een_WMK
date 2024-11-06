<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function tenagaAhliKontenEdukatif()
    {
        return view('tenagaAhli/kelola_konten_edukatif', [
            "title" => "Kelola Konten Edukatif"
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
    public function index()
    {
        return view('admin/data_konten_edukatif', [
            "title" => "Kelola Konten Edukatif"
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
