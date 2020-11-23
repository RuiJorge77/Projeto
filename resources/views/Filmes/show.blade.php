@if(isset($filme->id_filme))
<h1>Detalhes do Filme {{$filme->id_filme}}</h1>
{{$filme->titulo}}<br>
<br>
{{$filme->id_genero}}<br>
<br>
{{$filme->idioma}}<br>
<br>
{{$filme->sinopse}}<br>
<br>
{{$filme->generos->designacao}}<br>
<br>
{{$filme->ator->nome}}<br>
<br>
@else
<h1 style="color:ff0000">ERRO</h1>
@endif