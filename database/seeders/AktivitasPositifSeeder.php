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
            ['nama' => 'Meditasi', 'gambar' => 'storage/images/aktivitas-positif/meditation.svg'],
            ['nama' => 'Olahraga', 'gambar' => 'storage/images/aktivitas-positif/sports.svg'],
            ['nama' => 'Membaca Buku', 'gambar' => 'storage/images/aktivitas-positif/reading.svg'],
            ['nama' => 'Berjalan Kaki', 'gambar' => 'storage/images/aktivitas-positif/walking.svg'],
            ['nama' => 'Menulis Jurnal', 'gambar' => 'storage/images/aktivitas-positif/writing.svg'],
            ['nama' => 'Berkebun', 'gambar' => 'storage/images/aktivitas-positif/planting.svg'],
            ['nama' => 'Menggambar', 'gambar' => 'storage/images/aktivitas-positif/drawing.svg'],
            ['nama' => 'Mendengarkan Musik', 'gambar' => 'storage/images/aktivitas-positif/listen-music.svg'],
            ['nama' => 'Jogging', 'gambar' => 'storage/images/aktivitas-positif/jogging.svg'],
            ['nama' => 'Bersepeda', 'gambar' => 'storage/images/aktivitas-positif/cycling.svg'],
        ]);
    }
}
