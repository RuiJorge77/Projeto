<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    
    protected $primaryKey='id_genero';
    
    protected $table='generos';
    
    public function filmes(){
        return $this->hasMany(
        'App\Models\Filme',
            'id_genero'
        );
    }
}
