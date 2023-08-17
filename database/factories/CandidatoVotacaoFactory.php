<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CandidatoVotacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'votacao_id' => rand(2, 6),
            'candidato_id'=> rand(1, 20),
            'pontos' => rand(0, 100),
        ];
    }
}
