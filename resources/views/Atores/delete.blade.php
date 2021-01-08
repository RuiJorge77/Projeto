<h2>deseja eliminar o ator?</h2>
<h2>{{$ator->nome}}</h2>
<form method="post" action="{{route('atores.destroy', ['id'=>$ator->id_ator])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
</form>