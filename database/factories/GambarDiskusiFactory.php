<?php

namespace Database\Factories;

use App\Models\Diskusi;
use App\Models\GambarDiskusi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GambarDiskusi>
 */
class GambarDiskusiFactory extends Factory
{
    protected $model = GambarDiskusi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_diskusi' => Diskusi::inRandomOrder()->first()->id, // Ambil ID diskusi secara acak
            'gambar' => $this->faker->imageUrl(640, 480, 'discussion', true, 'Faker'), // URL gambar acak
        ];
    }
}
