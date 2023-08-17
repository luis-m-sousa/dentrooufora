<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    
    protected $fillable = ['nome'];
    protected $table = 'categoria';

    use HasFactory;
    use SoftDeletes;

    public function candidatos()
    {
        return $this->belongsToMany(Candidato::class, 'categoria_candidato');
    }
}
