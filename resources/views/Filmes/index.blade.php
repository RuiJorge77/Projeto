@section('titulo-pagina')
Video Clube
@endsection
<h1>Aqui estão todos os Filmes</h1>
@foreach($filmess as $filme)
<h3> <a href="{{route('filmes.show', ['id'=>$filme->id_filme])}}">
<li>{{$filme->titulo}}</li>
</a>
</h3>
@endforeach
@if(session()->has('mensagem'))
    <div class="alert alert-danger" role="alert">
    {{session('mensagem')}}
    </div>
@endif
<button>
<a class="btn btn-primary" href="{{route('pesquisa.index', ['id'=>$filme->id_filme])}}">
    Voltar
</a>
</button>
@if(auth()->check())
<button>
    <a class="btn btn-primary" href="{{route('filmes.create', ['id'=>$filme->id_filme])}}">
        Criar
    </a>
</button>
@endif