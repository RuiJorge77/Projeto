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
@else
<h1 style="color:ff0000">ERRO</h1>
@endif