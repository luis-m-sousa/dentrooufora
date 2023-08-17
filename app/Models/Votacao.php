<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Votacao extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'votacao';
    protected $fillable = ['titulo, descricao, datahora_inicio, datahora_fim, publica, foto_capa'];

    public function categoria ()
    {
        return $this->belongsTo(Categoria::class);
    }
    
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function candidato()
    {
        return $this->belongsToMany(Candidato::class, 'candidato_votacao');
    }
}

