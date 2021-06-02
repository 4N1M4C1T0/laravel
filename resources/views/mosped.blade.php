@extends("layout2")

@section("Contenido")

<section>
        @foreach($resultado as $pedido)
        <label>ID DE CURSO: {{$pedido["idcurso"]}}</label><br>
        <label>ID DE USUARIO: {{$pedido["idusu"]}}</label><br>
        <label>IMPORTE TOTAL: {{$pedido["importe_total"]}}</label><br>
        <a href="actped/{{$pedido["id"]}}" >Actualizar</a>
        <a href="delped/{{$pedido["id"]}}" >Eliminar</a><br><br>
        @endforeach
</section>

@endsection
