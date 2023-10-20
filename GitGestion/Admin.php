<?php
    include_once("Patrones/Template/Plantilla.php");
    include_once("Patrones/Template/Admin.php");
    $Pagina = new Admin;
    $Pagina -> verificarSesionIndex(); 
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="Recursos/Imagenes/Logos/blanco.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administrador</title>

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
            type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- inject:css -->

        <link rel="stylesheet" href="Recursos/CSS/Aplicacion.css">
        <link rel="stylesheet" href="Recursos/CSS/EstilosAdmin.css">
        <!-- endinject -->
        <script src="Recursos/JS/Librerias/jquery-1.11.1.min.js"></script>
        <script src="Recursos/JS/Librerias/jquery-1.11.1.js"></script>
        <script src="Recursos/JS/Librerias/JqueryLib.js"></script>
        <script src="Recursos/JS/modal.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            $Pagina -> crearPagina();
        ?>    
        <script src="Recursos/JS/recursos.js"></script>
        <script src="Recursos/JS/material.js"></script>
    </body>
</html>