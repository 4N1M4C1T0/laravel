@extends("layout1")

@section("Contenido")

<form action="/cur" method="POST">
    @csrf
    <input type="text" name="nombre_curso"  placeholder="NOMBRE DEL CURSO" >
    @error('nombre_curso')
    <br>
    <span style="color: darkred">{{$message}}</span>
    @enderror
    <br><br>
    <input type="text" name="biografia_curso" placeholder="BIOGRAFIA">
    @error('biografia_curso')
        <br>
    <span style="color: darkred">{{$message}}</span>
    @enderror
    <br><br>
    <input type="number" name="precio" placeholder="PRECIO">
    @error('precio')
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
    <input type="submit" name="submit" value="Guardar">
</form>
id_columna: {{$idc}}
@endsection
