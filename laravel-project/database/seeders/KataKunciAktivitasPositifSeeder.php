<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KataKunciAktivitasPositifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kata_kunci_aktivitas_positif')->insert([
            ['id_aktivitas' => 1, 'nama' => 'Relaksasi'],
            ['id_aktivitas' => 1, 'nama' => 'Meditasi'],
            ['id_aktivitas' => 2, 'nama' => 'Olahraga'],
            ['id_aktivitas' => 2, 'nama' => 'Kesehatan'],
            ['id_aktivitas' => 3, 'nama' => 'Literasi'],
            ['id_aktivitas' => 3, 'nama' => 'Pembelajaran'],
            ['id_aktivitas' => 4, 'nama' => 'Aktivitas Fisik'],
            ['id_aktivitas' => 4, 'nama' => 'Kesehatan'],
            ['id_aktivitas' => 5, 'nama' => 'Ekspresi Diri'],
            ['id_aktivitas' => 5, 'nama' => 'Refleksi'],
            ['id_aktivitas' => 6, 'nama' => 'Seni'],
            ['id_aktivitas' => 6, 'nama' => 'Hobi'],
            ['id_aktivitas' => 7, 'nama' => 'Kreativitas'],
            ['id_aktivitas' => 7, 'nama' => 'Seni'],
            ['id_aktivitas' => 8, 'nama' => 'Relaksasi'],
            ['id_aktivitas' => 8, 'nama' => 'Kesenangan'],
            ['id_aktivitas' => 9, 'nama' => 'Olahraga'],
            ['id_aktivitas' => 9, 'nama' => 'Kesehatan'],
            ['id_aktivitas' => 10, 'nama' => 'Olahraga'],
            ['id_aktivitas' => 10, 'nama' => 'Transportasi'],
        ]);
    }
}
