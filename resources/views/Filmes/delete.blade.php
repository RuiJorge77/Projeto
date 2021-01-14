<h2>Deseja Eliminar o Filme?</h2>
<h2>{{$filme->titulo}}</h2>
<form method="post" action="{{route('filmes.destroy', ['id'=>$filme->id_filme])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
</form>