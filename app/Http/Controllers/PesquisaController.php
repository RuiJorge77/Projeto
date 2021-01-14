<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ator;
use App\Models\Filme;
use App\Models\Generos;

class PesquisaController extends Controller
{
    //
    public function index(){
        return view('pesquisa');
    }
    public function formenviado(Request $request){
        $string=$request->pesquisa;
        $re=Ator::where('Nome','Like','%'.$string.'%')->get();
        return view('pesquisares',['pesquisa'=>$string,'resultado'=>$re]);
    }
}
