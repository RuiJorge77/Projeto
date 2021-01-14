<form action="{{route('generos.update', ['id'=>$genero->id_genero])}}" method="post">
@csrf
@method('patch') 
designacao: <input type="text" name="designacao" value="{{$genero->designacao}}"><br>
@if($errors->has('designacao') )
    deverá indicar uma designacao correta
    <br>
@endif
observacoes: <input type="text" name="observacoes" value="{{$genero->observacoes}}"><br>
@if($errors->has('observacoes') )
    deverá indicar uma observacao correta
    <br>
@endif    
<input type="submit" name="enviar">
</form>