<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    use HasFactory;
    
    protected $primaryKey='id_ator';
    
    protected $table='atores';
    
    public function filmes(){
        return $this->hasMany(
        'App\Models\Filme',
            'id_ator'
        );
    }
    
    protected $fillable = [
        'nome',
        'nacionalidade',
        'data_nascimento',
        'fotografia'
    ];
}