<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatoVotacao extends Model
{
    use HasFactory;
    protected $table = 'candidato_votacao';
    protected $fillable = ['votacao_id', 'candidato_id', 'pontos'];

    public function votos(){
        return $this->belongsTo(CandidatoVotacao::class);
    }
}
