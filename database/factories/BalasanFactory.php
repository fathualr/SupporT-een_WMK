<?php

namespace Database\Factories;

use App\Models\Balasan;
use App\Models\Pasien;
use App\Models\Diskusi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Balasan>
 */
class BalasanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Balasan::class;

    public function definition()
    {
        return [
            'id_pasien' => Pasien::inRandomOrder()->first()->id, // Mengambil ID pasien secara acak
            'id_diskusi' => Diskusi::inRandomOrder()->first()->id, // Mengambil ID diskusi secara acak
            'isi' => $this->faker->sentence(10), // Menghasilkan teks balasan acak
        ];
    }
}
