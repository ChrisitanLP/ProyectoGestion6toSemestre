<?php

include_once("AccionesAdmin.php");

$accion = $_SERVER['REQUEST_METHOD'];
switch ($accion) {
    case 'GET':

        break;

    case 'POST':
        $opcion = $_POST['opcion'];
        switch ($opcion) {
            case 1:
                $usuario = $_POST['usuarioI'];
                $contrasena = $_POST['claveI'];
                $email = $_POST['emailI'];
                $telefono = $_POST['telefonoI'];
                Acciones::InsertarUsuario($usuario, $contrasena, $email, $telefono);
                break;
            case 2:
                $usuario = $_POST['usuario_valor'];
                $contrasena = $_POST['claveE'];
                $email = $_POST['emailE'];
                $telefono = $_POST['telefonoE'];
                Acciones::ActualizarUsuario($usuario, $contrasena, $email, $telefono);
                break;
                case 3:
                    $usuario = $_POST['usuario_val'];
                    Acciones::EliminarUsuaio($usuario);
                    break;
            default:
                header("location:../Paginas/Usuarios.php");
                break;
        }
        break;

    case 'PUT':

        break;

    case 'DELETE':
        break;
}

?>