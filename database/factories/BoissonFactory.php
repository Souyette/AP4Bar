<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boisson>
 */
class BoissonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ID_PRODUIT' => $this->faker->numberBetween(55, 100),
            'VOLUME' => $this->faker->numberBetween(12.5, 25),
        ];
    }
}
