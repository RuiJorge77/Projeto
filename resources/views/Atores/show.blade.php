@if(isset($ator->id_ator))
<h1>Detalhes do ator {{$ator->id_ator}}</h1>
Nome: {{$ator->nome}}<br>
<br>
Nacionalidade: {{$ator->nacionalidade}}<br>
<br>
Data de Nascimento: {{$ator->data_nascimento}}
<br>

<img src="{{asset('imagens/atores/'.$ator->fotografia)}}">

Created_at: {{$ator->created_at}}<br>
<br>
Updated_at: {{$ator->update_at}}<br>
<ul>
@foreach($ator->filmes as $movie)
    <li>{{$movie->titulo}}</li>
@endforeach
</ul>
<button>
<a class="btn btn-primary" href="{{route('atores.index', ['id'=>$ator->id_ator])}}">
    Voltar
</a>
</button>
@if(auth()->check())
<button>
<a class="btn btn-primary" href="{{route('atores.edit', ['id'=>$ator->id_ator])}}">
    Editar
</a>
</button>
<button>
<a class="btn btn-primary" href="{{route('atores.delete', ['id'=>$ator->id_ator])}}">
    Eliminar
</a>
</button>
@endif
@else
<h1 style="color:ff0000">ERRO</h1>
@endif