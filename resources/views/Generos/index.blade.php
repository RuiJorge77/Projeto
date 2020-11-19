<h1>Aqui estão todos os Géneros de Filmes</h1>
@foreach($geneross as $genero)
<h3> <a href="{{route('Genero.show', ['numero'=>$genero->id_genero])}}">
<li>{{$genero->designacao}}</li>
</a>
</h3>
@endforeach