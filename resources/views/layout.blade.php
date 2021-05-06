@include(\http\Env\Request::class)

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Usuario</title>
    <meta charset="utf-8" />
    <meta name="description" content="Funciones del usuario">
    <link rel="shortcut icon" href="/favicon.ico" />
    <style>
        .actual{
            color: #1a202c;
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: darkgray">
<nav>
    <a href="/usuario/1" class={{ Request::path()=="/usuario/1"?"actual":"" }}>INGRESAR</a>
    <a href="/mosusu" class={{ Request::path()=="/mosusu"?"actual":"" }}>VER USUARIOS</a>

</nav>
<header>
    <h1>Sistema de usuarios</h1>
</header>
<section>
    @yield("Contenido")
</section>
</body>
</html>
