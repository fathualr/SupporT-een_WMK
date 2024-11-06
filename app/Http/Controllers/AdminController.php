<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function superAdmin()
    {
        return view('admin/dashboard_super', [
            "title" => "Dashboard Super Admin"
        ]);
    }

    public function contentAdmin()
    {
        return view('admin/dashboard_content', [
            "title" => "Dashboard Content Admin"
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/data_administrator', [
            "title" => "Data Admin"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/form/tambah_data_administrator', [
            "title" => "Tambah Data Admin"
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
