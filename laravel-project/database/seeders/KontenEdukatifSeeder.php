<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KontenEdukatif;

class KontenEdukatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 10 konten edukatif menggunakan factory
        KontenEdukatif::factory()->count(15)->create();
    }
}
