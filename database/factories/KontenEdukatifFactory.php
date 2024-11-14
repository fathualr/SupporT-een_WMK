<?php

namespace Database\Factories;

use App\Models\KontenEdukatif;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KontenEdukatif>
 */
class KontenEdukatifFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KontenEdukatif::class;

    public function definition()
    {
        $tipe = $this->faker->randomElement(['artikel', 'video']);

        return [
            'id_user' => User::factory(), // Menghubungkan dengan user yang ada
            'judul' => $this->faker->sentence,
            'tipe' => $tipe,
            'thumbnail' => 'image/dummy.png',
            'sumber' => $this->faker->url,
            'isi_artikel' => $tipe === 'artikel' ? $this->faker->paragraph : null,
            'link_youtube' => $tipe === 'video' ? $this->faker->url : null, // Link video jika tipe video
        ];
    }
}
