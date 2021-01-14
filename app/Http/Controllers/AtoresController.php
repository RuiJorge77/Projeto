<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Ator;
use App\Models\Filme;
use App\Models\Genero;

class AtoresController extends Controller
{
    //
    
    public function index() {
        $atores = Ator::all(); 
        return view ('atores.index', [
            'atoress'=>$atores
        ]);
    }
    
    public function show(Request $request)
    {
        $idator = $request->id;
        //dd($idator);
        $ator = Ator::where('id_ator', $idator)->with('filmes')->first();
        //dd($ator);
        return view('Atores.show',[
            'ator'=> $ator
        ]);
    }
    
    public function create(Request $request){
        $filmes = Filme::all();
        return view('atores.create', ['filmes'=>$filmes]);
    }
    
    public function store(Request $request){
        $novoator = $request->all();
        $novoator = $request->validate([
            'nome'=>['required', 'min:3', 'max:100'],
            'nacionalidade'=>['nullable', 'min:3', 'max:100'],
            'data_nascimento'=>['nullable', 'date'],
            'fotografia'=>['image', 'nullable', 'max:2000'],
        ]);
        
        if($request->hasFile('fotografia')){
            $nomeimagem = $request->file('fotografia')->getClientOriginalName();
            $nomeimagem = time().'_'. $nomeimagem;
            $guardarimagem = $request->file('fotografia')->storeAs('imagens/atores', $nomeimagem);
            $ator['fotografia'] = $nomeimagem;
        }
        $ator = Ator::create($novoator);
        
        return redirect()->route('atores.show', [
           'id'=>$ator->id_ator
        ]);
    }
    
    public function edit(Request $request){
        $idator = $request->id;
        $ator = Ator::where('id_ator', $idator)->first();
        return view('atores.edit', [
           'ator'=>$ator 
        ]);
    }
    
    public function update(Request $request){
        $idator = $request->id;
        $ator = Ator::findOrFail($idator);
        $atualizarator = $request->validate ([
            'nome'=>['required', 'min:3', 'max:100'],
            'nacionalidade'=>['nullable', 'min:3', 'max:100'],
            'data_nascimento'=>['nullable', 'date'],
            'fotografia'=>['image', 'nullable', 'max:2000'],
        ]);
        
        if($request->hasFile('fotografia')){
            $nomeimagem = $request->file('fotografia')->getClientOriginalName();
            $nomeimagem = time().'_'. $nomeimagem;
            //dd($nomeimagem);
            $guardarimagem = $request->file('fotografia')->storeAs('imagens/atores', $nomeimagem);
            $atualizarator['fotografia'] = $nomeimagem;
        }
        $ator->update($atualizarator);
        return redirect()->route('atores.show',[
            'id'=>$ator->id_ator
        ]);
    }
    
    public function delete(Request $request){
        $idator = $request->id;
        $ator = Ator::where('id_ator', $idator)->first();
        return view('atores.delete', [
           'ator'=>$ator 
        ]);
    }
    
    public function destroy(Request $request){
        $idator = $request->id;
        $ator = Ator::findOrFail($idator);
        $ator->delete();
        return redirect()->route('atores.index')->with('mensagem', 'Ator Eliminado!');
    }
}
