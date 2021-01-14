@extends('layout')
@section('titulo-pagina')
Livraria
@endsection
@section('conteudo')
@foreach($resultado as $res)
    <a href="{{route('atores.show', ['id'=>$res->id_ator])}}">
    <h4>Atores com esse nome: {{$res->nome}}</h4>
    </a>
    <br>
@endforeach
@endsection