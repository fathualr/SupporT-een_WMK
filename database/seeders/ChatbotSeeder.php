<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\PercakapanChatbot;
use App\Models\PesanChatbot;

class ChatbotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat data percakapan
        $percakapan1 = PercakapanChatbot::create([
            'id_pasien' => 1,
            'label' => 'Percakapan dengan Chatbot untuk konsultasi kesehatan',
            'last_activity' => now(),
            'status' => 'aktif',
        ]);

        $percakapan2 = PercakapanChatbot::create([
            'id_pasien' => 1,
            'label' => 'Percakapan dengan Chatbot untuk jadwal kontrol',
            'last_activity' => now(),
            'status' => 'selesai',
        ]);

        // Membuat data pesan untuk percakapan 1
        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan1->id,
            'teks' => 'Halo, ada yang bisa saya bantu?',
            'pengirim' => 'bot',
        ]);

        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan1->id,
            'teks' => 'Ya, saya ingin konsultasi mengenai gejala demam.',
            'pengirim' => 'pengguna',
        ]);

        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan1->id,
            'teks' => 'Baik, bisa jelaskan lebih detail tentang gejala yang dirasakan?',
            'pengirim' => 'bot',
        ]);

        // Membuat data pesan untuk percakapan 2
        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan2->id,
            'teks' => 'Selamat pagi, ada yang bisa saya bantu?',
            'pengirim' => 'bot',
        ]);

        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan2->id,
            'teks' => 'Saya ingin memastikan jadwal kontrol saya minggu depan.',
            'pengirim' => 'pengguna',
        ]);

        PesanChatbot::create([
            'id_percakapan_chatbot' => $percakapan2->id,
            'teks' => 'Baik, jadwal kontrol Anda adalah Senin, 20 November 2024 pukul 10:00 WIB.',
            'pengirim' => 'bot',
        ]);
    }
}
