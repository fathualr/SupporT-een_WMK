<?php

namespace Database\Factories;

use App\Models\KontenEdukatif;
use App\Models\KataKunciKonten;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KataKunciKonten>
 */
class KataKunciKontenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KataKunciKonten::class;

    public function definition()
    {
        return [
            'id_konten' => KontenEdukatif::inRandomOrder()->first()->id, // Menghubungkan ke konten edukatif secara acak
            'nama' => $this->faker->word, // Menghasilkan kata acak untuk nama kata kunci
        ];
    }
}
