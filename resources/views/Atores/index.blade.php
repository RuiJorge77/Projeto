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