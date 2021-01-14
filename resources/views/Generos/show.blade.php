@if(isset($genero->id_genero))
<h1>Detalhes do Genero {{$genero->id_genero}}</h1>
{{$genero->designacao}}<br>
<br>
{{$genero->observacoes}}
<ul>
@foreach($genero->filmes as $moviee)
    <li>{{$moviee->titulo}}</li>
@endforeach
</ul>
<button>
<a class="btn btn-primary" href="{{route('generos.index', ['id'=>$genero->id_genero])}}">
    Voltar
</a>
</button>
@if(auth()->check())
<button>
<a class="btn btn-primary" href="{{route('generos.edit', ['id'=>$genero->id_genero])}}">
    Editar
</a>
</button>
<button>
<a class="btn btn-primary" href="{{route('generos.delete', ['id'=>$genero->id_genero])}}">
    Eliminar
</a>
</button>
@endif
@else
<h1 style="color:ff0000">ERRO</h1>
@endif