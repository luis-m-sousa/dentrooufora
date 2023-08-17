<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoVotacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_votacao', function (Blueprint $table) {
            $table->unsignedBigInteger('votacao_id');
            $table->unsignedBigInteger('candidato_id');
            $table->smallInteger('pontos');
            $table->timestamps();

            $table->foreign('votacao_id')->references('id')->on('votacao');
            $table->foreign('candidato_id')->references('id')->on('candidato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato_votacao');
    }
}
