<form action="{{route('filmes.update', ['id'=>$filme->id_filme])}}" method="post">
@csrf
@method('patch')
Titulo: <input type="text" name="titulo" value="{{$filme->titulo}}"><br>
@if($errors->has('titulo') )
    deverá indicar um titulo correto
    <br>
@endif
Género: <input type="text" name="id_genero" value="{{$filme->id_genero}}"><br>
@if($errors->has('id_genero') )
    deverá indicar um genero correto
    <br>
@endif
sinopse: <input type="text" name="sinopse" value="{{$filme->sinopse}}"><br>
@if($errors->has('sinopse') )
    deverá indicar uma sinopse correta
    <br>
@endif
quantidade: <input type="text" name="quantidade" value="{{$filme->quantidade}}"><br>
@if($errors->has('quantidade') )
    deverá indicar uma quantidade correta
    <br>
@endif
idioma: <input type="text" name="idioma" value="{{$filme->idioma}}"><br>
@if($errors->has('idioma') )
    deverá indicar uma idioma correta
    <br>
@endif
Ator: <input type="text" name="id_ator" value="{{$filme->id_ator}}"><br>
@if($errors->has('id_ator') )
    deverá indicar um Ator correta
    <br>
@endif
<input type="submit" name="enviar">
</form>