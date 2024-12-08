<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        return view('Pasien.journal');
    }

    public function update(Request $request, $id)
    {
        return redirect()->back()->with('success', 'Jurnal berhasil diperbarui!');
    }
}

