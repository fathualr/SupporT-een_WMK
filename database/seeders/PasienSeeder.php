<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasien')->insert([
            [
                'id_user' => 4, // Pasien
                'deskripsi_diri' => 'Saya adalah seorang pasien yang sedang mencari bantuan.',
            ],
        ]);
    }
}
