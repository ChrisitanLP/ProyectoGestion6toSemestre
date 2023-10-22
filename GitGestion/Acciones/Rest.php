<?php

    include_once("AccionesAdmin.php");

    $accion = $_SERVER['REQUEST_METHOD'];
    switch ($accion) {
        case 'GET':

            break;

        case 'POST':
            $usuario = $_POST['usuarioI'];
            $contrasena = $_POST['claveI'];
            $email = $_POST['emailI'];
            $telefono = $_POST['telefonoI'];
            Acciones::InsertarUsuario($usuario, $contrasena, $email, $telefono);
            break;

        case 'PUT':
           
            break;

        case 'DELETE':
            break;
    }

?>