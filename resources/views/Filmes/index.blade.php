<h1>Aqui estão todos os Filmes</h1>
@foreach($filmess as $filme)
<h3> <a href="{{route('Filmes.show', ['numero'=>$filme->id_filme])}}">
<li>{{$filme->titulo}}</li>
</a>
</h3>
@endforeach