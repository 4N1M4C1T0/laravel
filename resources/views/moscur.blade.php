<section>
    @foreach($resultado as $curso)
        <label>NOMBRE: {{$curso["nombre_curso"]}}</label><br>
        <label>BIOGRAFIA: {{$curso["biografia_curso"]}}</label><br>
        <label>PRECIO: {{$curso["precio"]}}</label><br>
        <label>ID DE USUARIO: {{$curso["idusu"]}}</label><br>
    @endforeach
</section>
