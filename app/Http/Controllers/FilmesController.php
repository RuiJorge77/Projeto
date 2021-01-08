<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmesController extends Controller
{
    //
    
    public function index() {
        $filmes = filme::all(); 
        return view ('filmes.index', [
            'filmess'=>$filmes
        ]);
    }
    
    public function show(Request $req)
    {
        $idfilme = $req->numero;
        $filme = filme::where('id_filme', $idfilme)->with('generos')->first();
        return view('Filmes.show',[
            'filme'=> $filme
        ]);
    }
    
}
