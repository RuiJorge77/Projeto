@if(isset($ator->id_ator))
<h1>Detalhes do ator {{$ator->id_ator}}</h1>
{{$ator->nome}}<br>
<br>
{{$ator->nacionalidade}}<br>
<br>
{{$ator->data_nascimento}}
<ul>
@foreach($ator->filmes as $movie)
    <li>{{$movie->titulo}}</li>
@endforeach
</ul>
@else
<h1 style="color:ff0000">ERRO</h1>
@endif