<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\PercakapanChatbot;

class ChatbotController extends Controller
{
    
    public function chatbot($id = null)
    {
        // Ambil semua percakapan dari database, diurutkan berdasarkan last_activity
        $percakapanList = PercakapanChatbot::with('pesanChatbot')
            ->orderBy('last_activity', 'desc')
            ->get();
    
        // Jika $id tersedia, ambil percakapan yang dipilih, termasuk pesan terkait
        $selectedPercakapan = $id ? PercakapanChatbot::with(['pesanChatbot' => function ($query) {
            $query->orderBy('id', 'desc'); // Urutkan pesan berdasarkan waktu ascending
        }])->find($id) : null;
    
        return view('pasien/chatbot', [
            'title' => 'Chatbot',
            'percakapanList' => $percakapanList,
            'selectedPercakapan' => $selectedPercakapan,
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'label' => 'required|string|max:255'
        ]);
    
        PercakapanChatbot::findOrFail($id)->update(['label' => $request->input('label')]);
    
        return redirect()->back()->with('success', 'Label percakapan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $percakapan = PercakapanChatbot::findOrFail($id);
    
        $percakapan->delete();
    
        return redirect()->route('chatbot.index')->with('success', 'Percakapan berhasil dihapus.');
    }
}
