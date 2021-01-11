@if(isset($filme->id_filme))
<h1>Detalhes do Filme {{$filme->id_filme}}</h1>
Titulo: {{$filme->titulo}}<br>
<br>
Genero: {{$filme->id_genero}}<br>
<br>
idioma: {{$filme->idioma}}<br>
<br>
sinopse: {{$filme->sinopse}}<br>
<br>
Ator: {{$filme->ator->nome}}<br>
<br>
Created_at: {{$filme->created_at}}<br>
<br>
Updated_at: {{$filme->update_at}}<br>
<button>
<a class="btn btn-primary" href="{{route('atores.edit', ['id'=>$filme->id_filme])}}">
    Editar
</a>
</button>
<button>
<a class="btn btn-primary" href="{{route('atores.delete', ['id'=>$filme->id_filme])}}">
    Eliminar
</a>
</button>
@else
<h1 style="color:ff0000">ERRO</h1>
@endif