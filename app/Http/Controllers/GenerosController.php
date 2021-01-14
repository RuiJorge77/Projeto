<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Genero;
use App\Models\Ator;
use App\Models\Filme;

class GenerosController extends Controller
{
    //
    
    public function index() {
        $generos = genero::all(); 
        return view ('Generos.index', [
            'geneross'=>$generos
        ]);
    }
    
    public function show(Request $request)
    {
        $idgenero = $request->id;
        $genero = genero::where('id_genero', $idgenero)->with('filmes')->first();
        return view('Generos.show',[
            'genero'=> $genero
        ]);
    }
    
    public function create(Request $request){
        $generos = Genero::all();
        return view('generos.create', ['generos'=>$generos]);
    }
    
    public function store(Request $request){
        $novogenero = $request->all();
        $novogenero = $request->validate([
            'designacao'=>['required', 'min:3', 'max:100'],
            'observacoes'=>['nullable', 'min:3', 'max:100'],
        ]);
        
        $genero = Genero::create($novogenero);
        
        return redirect()->route('generos.show', [
           'id'=>$genero->id_genero
        ]);
    }
    
    public function edit(Request $request){
        $idgenero = $request->id;
        $genero = Genero::where('id_genero', $idgenero)->first();
        return view('generos.edit', [
           'genero'=>$genero 
        ]);
    }
    
    public function update(Request $request){
        $idgenero = $request->id;
        $genero = Genero::findOrFail($idgenero);
        $atualizargenero = $request->validate ([
            'designacao'=>['required', 'min:3', 'max:100'],
            'observacoes'=>['nullable', 'min:3', 'max:100'],
        ]);
        $genero->update($atualizargenero);
        return redirect()->route('generos.show',[
            'id'=>$genero->id_genero
        ]);
    }
    
    public function delete(Request $request){
        $idgenero = $request->id;
        $genero = Genero::where('id_genero', $idgenero)->first();
        return view('generos.delete', [
           'genero'=>$genero 
        ]);
    }
    
    public function destroy(Request $request){
        $idgenero = $request->id;
        $genero = Genero::findOrFail($idgenero);
        $genero->delete();
        return redirect()->route('generos.index')->with('mensagem', 'Genero Eliminado!');
    }
}
