<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenagaAhliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tenaga_ahli')->insert([
            [
                'id_user' => 3, // Tenaga Ahli
                'nomor_str' => 'STR123456',
                'spesialisasi' => 'Psikolog',
                'jadwal_aktif' => 'Senin-Jumat, 09:00-17:00',
                'lokasi_praktik' => 'Klinik Kesehatan Mental',
                'biaya_konsultasi' => 150000.00,
                'tabungan' => 0.00,
            ],
        ]);
    }
}
