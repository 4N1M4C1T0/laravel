<form method="POST" action="/usu" >
    @csrf
    <label for="tipo_usu">TIPO DE USUARIO</label> <br/>
    <select id="tipo_usu" name="tipo_usu">
        <option value="" selected="selected">- SELECCIONE -</option>
        <option value="profesor">PROFESOR</option>
        <option value="alumno">ALUMNO</option>
    </select>

    <input type="text" name="nombre" size="40" placeholder="Nombre">
    <input type="email" name="correo" placeholder="email">
    <input type="password" name="contrasenia" placeholder="password">
    <input type="number" name="dni" min="1900" placeholder="DNI">
    <input type="text" name="direccion" placeholder="Direccion">
    <input type="submit" name="submit" value="Guardar">
</form>
