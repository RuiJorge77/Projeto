<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;
    
    protected $primaryKey='id_filme';
    
    protected $table='filmes';
    
    public function generos(){
        return $this->belongsTO(
        'App\Models\Genero',
            'id_genero'
        );
    }
    
    public function ator(){
        return $this->belongsTO(
        'App\Models\Ator',
            'id_ator'
        );
    }
    
    protected $fillable = [
        'titulo',
        'id_genero',
        'sinopse',
        'quantidade',
        'idioma',
        'id_ator'
    ];
}