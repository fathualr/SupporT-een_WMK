<?php

namespace App\Http\Controllers;

use App\Models\ChatbotLog;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
Use App\Models\User;
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
        // Gunakan getNonPremiumLimit untuk validasi
        $messageLimit = Auth::user()->pasien->getNonPremiumLimit();
        $nextAvailableTime = null;

        if ($messageLimit >= 10) {
            // Ambil log pertama dalam 5 jam terakhir
            $lastLog = Auth::user()->pasien->chatbotLogs()
                ->where('sent_at', '>=', Carbon::now()->subHours(5))
                ->oldest('sent_at') // Urutkan berdasarkan waktu terlama
                ->first(); // Ambil data pertama
        
            if ($lastLog) {
                $nextAvailableTime = Carbon::parse($lastLog->sent_at)->addHours(5); // Tambahkan 5 jam
            }
        }
        
        return view('pasien/chatbot', [
            'title' => 'Chatbot',
            'percakapanList' => $percakapanList,
            'selectedPercakapan' => $selectedPercakapan,
            'nextAvailableTime' => $nextAvailableTime ?? null, // Default null jika tidak ada log
        ]);
        
    }

    protected function getOrCreatePercakapan(Request $request, array $validated, $idPasien)
    {
        if ($request->has('id_percakapan') && $request->id_percakapan) {
            return PercakapanChatbot::firstOrCreate([
                'id' => $request->id_percakapan,
                'id_pasien' => $idPasien,
            ]);
        }
    
        // Gunakan pesan pertama pengguna sebagai label
        $label = strlen($validated['pesan']) > 50
            ? substr($validated['pesan'], 0, 50) . '...'
            : $validated['pesan'];
    
        return PercakapanChatbot::create([
            'id_pasien' => $idPasien,
            'label' => $label,
            'last_activity' => now(),
            'status' => 'aktif',
        ]);
    }

    protected function storePesanDanLog($percakapan, array $validated, $idPasien)
    {
        // Simpan pesan pengguna
        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan->id,
            'teks' => $validated['pesan'],
            'pengirim' => 'pengguna',
        ])->forceFill([
            'created_at' => Carbon::now()->subSecond(),
            'updated_at' => Carbon::now()->subSecond(),
        ])->save();
    
        // Perbarui waktu aktivitas terakhir pada percakapan
        $percakapan->update(['last_activity' => now()]);
    
        // Rekam log ke tabel ChatbotLog
        ChatbotLog::create([
            'id_pasien' => $idPasien,
            'sent_at' => now(),
        ]);
    }

    protected function getBotResponse($pesan, $percakapan)
    {
        try {
            $response = Http::post('http://127.0.0.1:9999/chatbot', [
                'pesan_baru' => $pesan,
            ]);
    
            if ($response->successful()) {
                $botResponse = $response->json('chatbot_response');
                // Simpan respons bot
                PesanChatbot::create([
                    'id_percakapan_chatbot' => $percakapan->id,
                    'teks' => $botResponse,
                    'pengirim' => 'bot',
                ])->forceFill([
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ])->save();
    
                return $botResponse;
            }
    
            // Simpan respons default jika API gagal
            $this->storeBotErrorResponse($percakapan, 'Maaf, terjadi masalah saat memproses permintaan Anda.');
        } catch (\Exception $e) {
            // Simpan respons default jika ada kesalahan
            $this->storeBotErrorResponse($percakapan, 'Maaf, sistem sedang bermasalah. Silakan coba lagi nanti.');
        }
    
        return null;
    }

    protected function storeBotErrorResponse($percakapan, $message)
    {
        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan->id,
            'teks' => $message,
            'pengirim' => 'bot',
        ])->save();
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
        $validated = $request->validate(['pesan' => 'max:255']);
        if (empty($validated['pesan'])) {
            return redirect()->back()->with('error', 'Pesan tidak boleh kosong!');
        }
    
        // Dapatkan pengguna dan pasien
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $idPasien = $user->pasien->id;
    
        // Periksa batas penggunaan untuk non-premium
        if (!$user->isPremium() && $user->pasien->getNonPremiumLimit() >= 10) {
            return redirect()->back()->with('error', 'Batas pesan Anda telah tercapai. Silakan upgrade ke premium untuk akses tak terbatas.');
        }
    
        // Dapatkan atau buat percakapan
        $percakapan = $this->getOrCreatePercakapan($request, $validated, $idPasien);
    
        // Tambahkan pesan pengguna
        $this->storePesanDanLog($percakapan, $validated, $idPasien);
    
        // Dapatkan respons bot
        $this->getBotResponse($validated['pesan'], $percakapan);

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
