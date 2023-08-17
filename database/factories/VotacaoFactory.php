<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VotacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->regexify('[A-Z0-9]{8}'),
            'categoria_id' => rand(0, 10),
            'usuario_id' => rand(0, 20),
            'titulo' => $this->faker->sentence,
            'datahora_inicio' =>now(),
            'publica' => $this->faker->boolean,
            'foto_capa' => null,
        ];
    }
}
