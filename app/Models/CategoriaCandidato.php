<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaCandidato extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'candidato_id',
        ];
        

    protected $table = 'categoria_candidato';

    public function qtdeCategorias(){
        return $this->belongsTo(CategoriaCandidato::class);
    }
}
