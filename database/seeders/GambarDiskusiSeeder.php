<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GambarDiskusi;

class GambarDiskusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 30 data gambar diskusi menggunakan factory
        GambarDiskusi::factory()->count(15)->create();
    }
}
