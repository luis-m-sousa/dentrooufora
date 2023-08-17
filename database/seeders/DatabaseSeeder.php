<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(100)->create();
        // \App\Models\Categoria::factory(10)->create();
        //  \App\Models\Candidato::factory(20)->create();
        // \App\Models\Votacao::factory(5)->create();
        // \App\Models\CandidatoVotacao::factory(10)->create();
        \App\Models\CategoriaCandidato::factory(10)->create();
    }
}
