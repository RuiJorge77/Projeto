<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
use App\Models\Ator;
use App\Models\Genero;

class FilmesController extends Controller
{
    //
    
    public function index() {
        $filmes = filme::all(); 
        return view ('filmes.index', [
            'filmess'=>$filmes
        ]);
    }
    
    public function show(Request $request)
    {
        $idfilme = $request->id;
        $filme = filme::where('id_filme', $idfilme)->with('generos')->first();
        return view('Filmes.show',[
            'filme'=> $filme
        ]);
    }
    
    public function create(Request $request){
        $generos = Genero::all();
        return view('filmes.create', ['generos'=>$generos]);
    }
    
    public function store(Request $request){
        $novofilme = $request->all();
        $novofilme = $request->validate([
            'titulo'=>['required', 'min:3', 'max:100'],
            'sinopse'=>['nullable', 'min:3', 'max:255'],
            'quantidade'=>['nullable', 'min:1', 'max:20'],
            'idioma'=>['nullable', 'min:3', 'max:20'],
        ]);
        
        $filme = Filme::create($novofilme);
        
        return redirect()->route('filmes.show', [
           'id'=>$filme->id_filme
        ]);
    }
    
    public function edit(Request $request){
        $idfilme = $request->id;
        $filme = Filme::where('id_filme', $idfilme)->first();
        return view('filmes.edit', [
           'filme'=>$filme 
        ]);
    }
    
    public function update(Request $request){
        $idfilme = $request->id;
        $filme = Filme::findOrFail($idfilme);
        $atualizarfilme = $request->validate ([
            'titulo'=>['required', 'min:3', 'max:100'],
            'id_genero'=>['nullable', 'min:3', 'max:20'],
            'sinopse'=>['nullable', 'min:3', 'max:255'],
            'quantidade'=>['nullable', 'min:1', 'max:20'],
            'idioma'=>['nullable', 'min:3', 'max:20'],
            'id_ator'=>['nullable', 'min:3', 'max:20'],
        ]);
        $filme->update($atualizarfilme);
        return redirect()->route('filmes.show',[
            'id'=>$filme->id_filme
        ]);
    }
    
    public function delete(Request $request){
        $idfilme = $request->id;
        $filme = Filme::where('id_filme', $idfilme)->first();
        return view('filmes.delete', [
           'filme'=>$filme 
        ]);
    }
    
    public function destroy(Request $request){
        $idfilme = $request->id;
        $filme = Filme::findOrFail($idfilme);
        $filme->delete();
        return redirect()->route('filmes.index')->with('mensagem', 'Filme Eliminado!');
    }
}
