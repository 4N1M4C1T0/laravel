<section>
        @foreach($resultado as $pedido)
        <label>ID DE CURSO: {{$pedido["idcurso"]}}</label><br>
        <label>ID DE USUARIO: {{$pedido["idusu"]}}</label><br>
        <label>IMPORTE TOTAL: {{$pedido["importe_total"]}}</label><br>
        @endforeach
</section>
