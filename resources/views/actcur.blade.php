@extends("layout1")

@section("Contenido")

    <form method="post" action="/actcur">
        @csrf
    <section>
        <label>ID:</label><input type="hidden" name="id" value="{{$resultado["id"]}}"> <br>
            <label>NOMBRE:</label><input type="text" name="nombre_curso" value="{{$resultado["nombre_curso"]}}"> <br>
        @error('nombre_curso')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
            <label>BIOGRAFIA:</label><input type="text" name="biografia_curso" value="{{$resultado["biografia_curso"]}}"> <br>
        @error('biografia_curso')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
            <label>PRECIO: </label><input type="number" name="precio" value="{{$resultado["precio"]}}"><br>
        @error('precio')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
            <label>ID DE USUARIO:</label><input type="number" name="idusu" value="{{$resultado["idusu"]}}"> <br>
        @error('idusu')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
            <input type="submit" name="submit" value="actualizar">

    </section>
    </form>
@endsection
