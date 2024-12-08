<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatPendidikanTenagaAhliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('riwayat_pendidikan_tenaga_ahli')->insert([
            [
                'id_tenaga_ahli' => 1, // Pastikan id_tenaga_ahli merujuk ke ID tenaga ahli yang valid di tabel tenaga_ahli
                'keterangan' => 'Universitas Psikologi Indonesia',
            ],
            [
                'id_tenaga_ahli' => 1,
                'keterangan' => 'Sekolah Tinggi Psikologi',
            ],
        ]);
    }
}
