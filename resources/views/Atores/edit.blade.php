<form action="{{route('atores.update', ['id'=>$ator->id_ator])}}" method="post">
@csrf
@method('patch')
Nome: <input type="text" name="nome" value="{{$ator->nome}}"><br>
@if($errors->has('nome') )
    deverá indicar um nome correto
    <br>
@endif
Data De Nascimento: <input type="date" name="data_nascimento" value="{{$ator->data_nascimento}}"><br>
@if($errors->has('nome') )
    deverá indicar um nome correto
    <br>
@endif
Nacionalidade: <input type="text" name="nacionalidade" value="{{$ator->nacionalidade}}"><br>
@if($errors->has('nacionalidade') )
    deverá indicar uma nacionalidade correta
    <br>
@endif
Fotografia: <input type="file" name="fotografia" value="{{$ator->fotografia}}"><br>
@if($errors->has('fotografia') )
    deverá indicar uma fotografia correta
    <br>
@endif
<input type="submit" name="enviar">
</form>