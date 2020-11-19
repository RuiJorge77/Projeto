<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    //
    
    public function index() {
        $generos = genero::all(); 
        return view ('Generos.index', [
            'geneross'=>$generos
        ]);
    }
    public function show(Request $req)
    {
        $idgenero = $req->numero;
        $genero = genero::where('id_genero', $idgenero)->with('filmes')->first();
        return view('Generos.show',[
            'genero'=> $genero
        ]);
    }
}
