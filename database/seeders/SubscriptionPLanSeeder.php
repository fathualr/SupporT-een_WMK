<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionPLanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscription_plan')->insert([
            [
                'name' => 'Monthly',
                'price' => 49999.00,
                'duration' => 30, // 30 hari
            ],
        ]);
    }
}
