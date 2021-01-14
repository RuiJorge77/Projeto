@section('titulo-pagina')
Video Clube
@endsection
<h1>Aqui estão todos os Géneros de Filmes</h1>
@foreach($geneross as $genero)
<h3> <a href="{{route('generos.show', ['id'=>$genero->id_genero])}}">
<li>{{$genero->designacao}}</li>
</a>
</h3>
@endforeach
@if(session()->has('mensagem'))
    <div class="alert alert-danger" role="alert">
    {{session('mensagem')}}
    </div>
@endif
<button>
    <a class="btn btn-primary" href="{{route('generos.create', ['id'=>$genero->id_genero])}}">
        Criar
    </a>
</button>