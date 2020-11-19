<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ator;

class AtoresController extends Controller
{
    //
    
    public function index() {
        $atores = Ator::all(); 
        return view ('atores.index', [
            'atoress'=>$atores
        ]);
    }
    
    public function show(Request $req)
    {
        $idator = $req->numero;
        $ator = Ator::where('id_ator', $idator)->with('filmes')->first();
        return view('Atores.show',[
            'ator'=> $ator
        ]);
    }
}
