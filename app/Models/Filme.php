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
        return $this->hasMany(
        'App\Models\Genero',
            'id_genero'
        );
    }
}