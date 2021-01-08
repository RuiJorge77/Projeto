<form action="{{route('atores.store', ['id'=>$ator->id_ator])}}" method="post">
@csrf
Nome: <input type="text" name="nome"><br>
@if($errors->has('nome') )
    deverá indicar um nome correto
    <br>
@endif
Data De Nascimento: <input type="date" name="data_nascimento"><br>
@if($errors->has('nome') )
    deverá indicar um nome correto
    <br>
@endif
Nacionalidade: <input type="text" name="nacionalidade"><br>
@if($errors->has('nacionalidade') )
    deverá indicar uma nacionalidade correta
    <br>
@endif
Fotografia: <input type="file" name="fotografia"><br>
@if($errors->has('fotografia') )
    deverá indicar uma fotografia correta
    <br>
@endif
<input type="submit" name="enviar">
</form>