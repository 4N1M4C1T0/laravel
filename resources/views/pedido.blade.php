@extends("layout2")

@section("Contenido")

<form method="POST" action="/ped">
    @csrf
    <input type="number" name="idcurso" size="40" placeholder="ID CURSO">
    @error('idcurso')
    <br>
    <span style="color: darkred">{{$message}}</span>
    @enderror
    <br><br>
    <input type="number" name="idusu" size="40" placeholder="ID USUARIO">
    @error('idusu')
    <br>
    <span style="color: darkred">{{$message}}</span>
    @enderror
    <br><br>
    <input type="number" name="importe_total" placeholder="IMPORTE TOTAL">
    @error('importe_total')
    <br>
    <span style="color: darkred">{{$message}}</span>
    @enderror
    <br><br>
    <input type="submit" name="submit" value="Guardar">
</form>
id_columna: {{$idc}}
@endsection
