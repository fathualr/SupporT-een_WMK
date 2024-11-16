<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChatbotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Percakapan 1: 10 chat (2 arah)
        $percakapan1 = DB::table('percakapan_chatbot')->insertGetId([
            'id_pasien' => 1,
            'label' => 'Percakapan dengan 10 chat',
            'last_activity' => $now->copy()->addMinutes(20),
            'status' => 'aktif',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('pesan_chatbot')->insert([
                [
                    'id_percakapan_chatbot' => $percakapan1,
                    'teks' => "Pesan dari bot ke-$i",
                    'pengirim' => 'bot',
                    'created_at' => $now->copy()->addMinutes($i * 2),
                    'updated_at' => $now->copy()->addMinutes($i * 2),
                ],
                [
                    'id_percakapan_chatbot' => $percakapan1,
                    'teks' => "Pesan dari pengguna ke-$i",
                    'pengirim' => 'pengguna',
                    'created_at' => $now->copy()->addMinutes($i * 2 + 1),
                    'updated_at' => $now->copy()->addMinutes($i * 2 + 1),
                ],
            ]);
        }

        // Percakapan 2: 1 chat (2 arah)
        $percakapan2 = DB::table('percakapan_chatbot')->insertGetId([
            'id_pasien' => 1,
            'label' => 'Percakapan dengan 1 chat',
            'last_activity' => $now->copy()->addMinutes(1),
            'status' => 'selesai',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('pesan_chatbot')->insert([
            [
                'id_percakapan_chatbot' => $percakapan2,
                'teks' => 'Halo, ini percakapan pendek dari bot.',
                'pengirim' => 'bot',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_percakapan_chatbot' => $percakapan2,
                'teks' => 'Halo, ini balasan dari pengguna.',
                'pengirim' => 'pengguna',
                'created_at' => $now->copy()->addMinute(),
                'updated_at' => $now->copy()->addMinute(),
            ],
        ]);

        // Percakapan 3: Tanpa percakapan
        $percakapan3 = DB::table('percakapan_chatbot')->insertGetId([
            'id_pasien' => 1,
            'label' => 'Percakapan tanpa pesan',
            'last_activity' => Carbon::now(), // Berikan nilai default
            'status' => 'aktif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
