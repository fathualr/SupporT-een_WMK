<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Memasukkan 4 pengguna ke tabel user
        DB::table('user')->insert([
            [
                'role' => 'admin',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password1'), // Password terenkripsi
                'nama' => 'Admin 1',
                'jenis_kelamin' => 'laki laki',
                'tanggal_lahir' => '1990-01-01',
                'foto_profil' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'admin',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password2'), // Password terenkripsi
                'nama' => 'Admin 2',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '1992-02-02',
                'foto_profil' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'tenaga ahli',
                'email' => 'tenagaahli@example.com',
                'password' => Hash::make('password3'), // Password terenkripsi
                'nama' => 'Tenaga Ahli 1',
                'jenis_kelamin' => 'laki laki',
                'tanggal_lahir' => '1988-03-03',
                'foto_profil' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'pasien',
                'email' => 'pasien@example.com',
                'password' => Hash::make('password4'), // Password terenkripsi
                'nama' => 'Pasien 1',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2000-04-04',
                'foto_profil' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
