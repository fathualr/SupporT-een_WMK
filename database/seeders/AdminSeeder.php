<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                'id_user' => 1, // Admin 1
                'admin_role' => 'superadmin',
            ],
            [
                'id_user' => 2, // Admin 2
                'admin_role' => 'content admin',
            ],
        ]);
    }
}
