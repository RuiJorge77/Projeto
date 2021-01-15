@section('titulo-pagina')
Video Clube
@endsection
<h1>Aqui estão todos os Atores</h1>
@foreach($atoress as $ator)
<h3> <a href="{{route('atores.show', ['id'=>$ator->id_ator])}}">
<li>{{$ator->nome}}</li>
</a>
</h3>
@endforeach
@if(session()->has('mensagem'))
    <div class="alert alert-danger" role="alert">
    {{session('mensagem')}}
    </div>
@endif
<button>
<a class="btn btn-primary" href="{{route('pesquisa.index', ['id'=>$ator->id_ator])}}">
    Voltar
</a>
</button>
@if(Gate::allows('atualizar-livro'. $ator) || Gate::allows('admin'))
@if(auth()->check())
<button>
    <a class="btn btn-primary" href="{{route('atores.create', ['id'=>$ator->id_ator])}}">
        Criar
    </a>
</button>
@endif
@endif