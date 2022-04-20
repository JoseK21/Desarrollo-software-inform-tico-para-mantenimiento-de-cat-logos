<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S. M. CATÁLOGOS DE RESIDENCIAS</title>
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
    <div class="end">
        <?php
        $serverUlr = $_SERVER['REQUEST_URI'];
        $loginUlr = '/mantenimiento/vista/login.php'
        ?>
        <?php if ($serverUlr != $loginUlr) : ?>
            <a href="login.php" class="btn btn-gray">Cerrar Sesión</a>
        <?php endif; ?>
    </div>
    <div class="panel">
        <h1 class="text-center">SISTEMA DE MANTENIMIENTO DE CATÁLOGOS DE RESIDENCIAS</h1>
        <!-- contenido-->