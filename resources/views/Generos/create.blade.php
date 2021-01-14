<form action="{{route('generos.store')}}" method="post">
@csrf
designacao: <input type="text" name="designacao"><br>
@if($errors->has('designacao') )
    deverá indicar uma designacao correta
    <br>
@endif
observacoes: <input type="text" name="observacoes"><br>
@if($errors->has('observacoes') )
    deverá indicar uma observacao correta
    <br>
@endif    
<input type="submit" name="enviar">
</form>