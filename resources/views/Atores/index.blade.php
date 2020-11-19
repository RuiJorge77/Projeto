<h1>Aqui estão todos os Atores</h1>
@foreach($atoress as $ator)
<h3> <a href="{{route('atores.show', ['numero'=>$ator->id_ator])}}">
<li>{{$ator->nome}}</li>
</a>
</h3>
@endforeach