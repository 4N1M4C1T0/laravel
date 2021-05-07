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
    <a href="/" class=={{Request::path()=="/"?"actual":""}}>INICIO</a>
    <a href="/curso/1" class={{ Request::path()=="/curso/1"?"actual":"" }}>INGRESAR</a>
    <a href="/moscur" class={{ Request::path()=="/moscur"?"actual":"" }}>VER CURSOS</a>

</nav>
<header>
    <h1>Sistema de cursos</h1>
</header>
<section>
    @yield("Contenido")
</section>
</body>
</html>
