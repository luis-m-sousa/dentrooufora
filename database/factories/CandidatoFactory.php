<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CandidatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'foto' => $this->faker->imageUrl($width= 640, $height= 480, 'cats', true, 'Faker') // 'http://lorempixel.com/800/400/cats/Faker';
        ];
    }
}
