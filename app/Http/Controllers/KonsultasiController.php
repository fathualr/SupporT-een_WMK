<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TenagaAhli;
use Illuminate\Http\Request;


class KonsultasiController extends Controller
{
    
    public function konsultasi()
    {
        $tenagaAhli = TenagaAhli::with('user')->get();



        return view('pasien/konsultasi', [
            "title" => "Konsultasi Online",
            "tenagaAhli" => $tenagaAhli,
        ]);
    
    }
    
    
    public function tenagaAhliKonsultasi()
    {
        return view('tenagaAhli/percakapan_konsultasi', [
            "title" => "Percakapan"
        ]);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
