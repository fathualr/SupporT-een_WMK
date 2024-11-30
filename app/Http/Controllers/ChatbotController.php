<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
Use App\Models\PercakapanChatbot;
use App\Models\PesanChatbot;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ChatbotController extends Controller
{
    
    public function chatbot(Request $request, $id = null)
    {
        $user = Auth::user();
        $idPasien = $user->pasien->id;
    
        $percakapanList = PercakapanChatbot::where('id_pasien', $idPasien)->orderBy('last_activity', 'desc')->get();
    
        $selectedPercakapan = null;
    
        if ($id) {
            $selectedPercakapan = PercakapanChatbot::with('pesanChatbot')
                ->where('id', $id)
                ->where('id_pasien', $idPasien)
                ->first();
    
            if (!$selectedPercakapan) {
                return redirect()->back()->with('error','Anda tidak memiliki akses ke percakapan ini.');
            }
        }
    
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
        // Validasi input pesan
        $validated = $request->validate([
            'pesan' => 'required|string|max:255',
        ]);
    
        // Dapatkan ID pasien dari sesi pengguna yang sedang login
        $user = Auth::user();
        $idPasien = $user->pasien->id;
    
        // Periksa apakah ada percakapan aktif
        $percakapan = null;
        if ($request->has('id_percakapan') && $request->id_percakapan) {
            // Cari percakapan berdasarkan ID
            $percakapan = PercakapanChatbot::where('id', $request->id_percakapan)
                ->where('id_pasien', $idPasien)
                ->first();
        }
    
        // Jika tidak ada percakapan, buat percakapan baru
        if (!$percakapan) {
            $percakapan = PercakapanChatbot::create([
                'id_pasien' => $idPasien,
                'label' => 'Percakapan Baru',
                'last_activity' => now(),
                'status' => 'aktif',
            ]);
        }
    
        // Tambahkan pesan pengguna ke percakapan
        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan->id,
            'teks' => $validated['pesan'],
            'pengirim' => 'pengguna',
        ])->forceFill([
            'created_at' => Carbon::now()->subSecond(), // Waktu mundur 1 detik
            'updated_at' => Carbon::now()->subSecond(),
        ])->save();
    
        // Perbarui last_activity pada percakapan
        $percakapan->update([
            'last_activity' => now(),
        ]);
    
        // Panggil Flask API untuk mendapatkan respons chatbot
        try {
            $response = Http::post('http://127.0.0.1:9999/chatbot', [
                'pesan_baru' => $validated['pesan'],
            ]);
    
            // Pastikan respons dari API sukses
            if ($response->successful()) {
                $botResponse = $response->json('chatbot_response');
    
                // Simpan respons bot ke dalam percakapan
                PesanChatbot::create([
                    'id_percakapan_chatbot' => $percakapan->id,
                    'teks' => $botResponse,
                    'pengirim' => 'bot',
                ])->forceFill([
                    'created_at' => Carbon::now(), // Waktu saat ini untuk respons bot
                    'updated_at' => Carbon::now(),
                ])->save();
            } else {
                // Jika API gagal, gunakan respons default
                PesanChatbot::create([
                    'id_percakapan_chatbot' => $percakapan->id,
                    'teks' => 'Maaf, terjadi masalah saat memproses permintaan Anda.',
                    'pengirim' => 'bot',
                ])->save();
            }
        } catch (\Exception $e) {
            // Jika ada error, simpan pesan default
            PesanChatbot::create([
                'id_percakapan_chatbot' => $percakapan->id,
                'teks' => 'Maaf, sistem sedang bermasalah. Silakan coba lagi nanti.',
                'pengirim' => 'bot',
            ])->save();
        }
    
        // Redirect kembali ke halaman percakapan
        return redirect()->route('chatbot.index', ['id' => $percakapan->id]);
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
