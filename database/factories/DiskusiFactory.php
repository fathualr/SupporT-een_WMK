<?php

namespace Database\Factories;

use App\Models\Diskusi;
use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diskusi>
 */
class DiskusiFactory extends Factory
{
    protected $model = Diskusi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pasien' => Pasien::inRandomOrder()->first()->id ?? null, // Ambil ID pasien secara acak atau null jika tidak ada
            'judul' => $this->faker->sentence(3), // Judul diskusi acak
            'isi' => $this->faker->paragraph(4), // Isi diskusi acak
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
