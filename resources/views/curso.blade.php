@extends("layout1")

@section("Contenido")

<form action="/cur" method="POST">
    @csrf
    <input type="text" name="nombre_curso" placeholder="NOMBRE DEL CURSO">
    <input type="text" name="biografia_curso" placeholder="BIOGRAFIA">
    <input type="number" name="precio" placeholder="PRECIO">
    <input type="number" name="idusu" size="40" placeholder="ID USUARIO">
    <input type="submit" name="submit" value="Guardar">
</form>
id_columna: {{$idc}}
@endsection
