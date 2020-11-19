@if(isset($filme->id_filme))
<h1>Detalhes do Filme {{$filme->id_filme}}</h1>
{{$filme->titulo}}<br>
<br>
{{$filme->id_genero}}<br>
<br>
{{$filme->idioma}}<br>
<br>
{{$filme->sinopse}}
<ul>
@foreach($filme->generos as $gene)
    <li>{{$gene->designacao}}</li>
@endforeach
</ul>
@else
<h1 style="color:ff0000">ERRO</h1>
@endif