@extends("layout")

@section("Contenido")

    <form method="post" action="/actusu">
        @csrf
    <section>
        <label>ID:</label><input type="hidden" name="id" value="{{$resultado["id"]}}"> <br>
        <label>TIPO DE USUARIO:</label><input type="text" name="tipo_usu"  value={{$resultado["tipo_usu"]}}><br>
        @error('tipo_usu')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <label>NOMBRE:</label><input type="text" name="nombre_usu"  value={{$resultado["nombre_usu"]}}><br>
        @error('nombre_usu')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <label>EMAIL:</label><input type="email" name="correo" value="{{$resultado["correo"]}}"><br>
        @error('correo')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <label>PASSWORD:</label><input type="password" name="contrasenia" value="{{$resultado["contrasenia"]}}"> <br>
        @error('contrasenia')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <label>DNI:</label><input type="number" name="dni" value="{{$resultado["dni"]}}"> <br>
        @error('dni')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <label>DIRECCION:</label> <input type="text" name="direccion" value="{{$resultado["direccion"]}}"> <br>
        @error('direccion')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="submit" name="submit" value="actualizar">

    </section>

    </form>

@endsection
