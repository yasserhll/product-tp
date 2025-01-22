<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    protected $model = \App\Models\Country::class;

    public function definition()
    {
        return [
            'name' => $this->faker->country(), // Nom fictif de pays
            'description' => $this->faker->sentence(), // Description fictive
            'position' => $this->faker->unique()->numberBetween(1, 200), // Position aléatoire
        ];
    }
}
