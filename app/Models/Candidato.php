<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidato extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'candidato';
    protected $fillable = ['nome', 'foto']; 

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_candidato');
    }
    public function qtdeCategorias()
    {
        return $this->hasMany(CategoriaCandidato::class);
    }

    public function votacao()
    {
        return $this->belongsToMany(Votacao::class, 'candidato_votacao');
    }
    public function votos()
    {
        return $this->hasMany(CandidatoVotacao::class);
    }
   
}
