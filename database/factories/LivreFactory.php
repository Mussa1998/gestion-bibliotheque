<?php

namespace Database\Factories;

use App\Models\Auteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'auteur_id' => Auteur::factory(),
            'is_available' => $this->faker->boolean(80), // 80% de chance d'être disponible
        ];
    }
}
