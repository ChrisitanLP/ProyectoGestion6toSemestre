<?php
    include_once("Patrones/Template/Plantilla.php");
    include_once("Patrones/Template/Admin.php");
    $Pagina = new Admin;
    $Pagina -> verificarSesionIndex();
    $Pagina -> verificarTipoUsuario(TRUE,'');
?>
<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link href="Recursos/Imagenes/Logos/blanco.ico" rel="icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Administrador</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="Recursos/CSS/EstilosAdmin.css">

</head>
<body>
        <?php
            $Pagina -> crearPagina();
        ?>    
        <script src="Recursos/JS/material.js"></script>
        <script src="Recursos/JS/Clima.js"></script>
    </body>
</html>