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

<header>
    <h1>SISTEMA GENERAL</h1>
</header>
<section>
    <a href="layout" class={{ Request::path()=="/layout"?"actual":""}}>USUARIOS</a><br>
    <a href="layout1" class={{ Request::path()=="/layout1"?"actual":""}}>CURSOS</a>
</section>
</body>
</html>
