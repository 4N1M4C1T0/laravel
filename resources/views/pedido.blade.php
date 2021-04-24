<form action="/ped" method="post">
    @csrf
    <input type="number" name="idcurso" size="40" placeholder="ID CURSO">
    <input type="number" name="idusu" size="40" placeholder="ID USUARIO">
    <input type="number" name="importe_total" placeholder="IMPORTE TOTAL">
    <input type="submit" value="Guardar">
    </p>
</form>
