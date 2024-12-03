<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AktivitasPositifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aktivitas_positif')->insert([
            ['nama' => 'Meditasi', 'gambar' => 'image/aktivitas-positif/meditation.svg'],
            ['nama' => 'Olahraga', 'gambar' => 'image/aktivitas-positif/sports.svg'],
            ['nama' => 'Membaca Buku', 'gambar' => 'image/aktivitas-positif/reading.svg'],
            ['nama' => 'Berjalan Kaki', 'gambar' => 'image/aktivitas-positif/walking.svg'],
            ['nama' => 'Menulis Jurnal', 'gambar' => 'image/aktivitas-positif/writing.svg'],
            ['nama' => 'Berkebun', 'gambar' => 'image/aktivitas-positif/planting.svg'],
            ['nama' => 'Menggambar', 'gambar' => 'image/aktivitas-positif/drawing.svg'],
            ['nama' => 'Mendengarkan Musik', 'gambar' => 'image/aktivitas-positif/listen-music.svg'],
            ['nama' => 'Jogging', 'gambar' => 'image/aktivitas-positif/jogging.svg'],
            ['nama' => 'Bersepeda', 'gambar' => 'image/aktivitas-positif/cycling.svg'],
        ]);
    }
}
