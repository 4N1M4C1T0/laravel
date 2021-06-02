@extends("layout2")

@section("Contenido")

    <form method="post" action="/actped">
        @csrf
        <section>
            <label>ID:</label><input type="hidden" name="id" value="{{$resultado["id"]}}"> <br>
            <label>IDCURSO:</label><input type="text" name="idcurso" value="{{$resultado["idcurso"]}}"> <br>
            @error('idcurso')
            <br>
            <span style="color: darkred">{{$message}}</span>
            @enderror
            <br><br>
            <label>IDUSU:</label><input type="text" name="idusu" value="{{$resultado["idusu"]}}"> <br>
            @error('idusu')
            <br>
            <span style="color: darkred">{{$message}}</span>
            @enderror
            <br><br>
            <label>IMPORTE TOTAL: </label><input type="number" name="importe_total" value="{{$resultado["importe_total"]}}"><br>
            @error('importe_total')
            <br>
            <span style="color: darkred">{{$message}}</span>
            @enderror
            <br><br>
            <input type="submit" name="submit" value="actualizar">

        </section>
    </form>
@endsection
