<?php

namespace Database\Seeders;

use App\Models\TenagaAhli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenagaAhliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        TenagaAhli::factory()->count(55)->create(); // Menggunakan factory untuk Tenaga Ahli
    }
}
