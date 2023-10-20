<?php

    include_once("AccionesUsuarios.php");

    $accion = $_SERVER['REQUEST_METHOD'];
    switch ($accion) {
        case 'GET':
            $data = Acciones::Mostrar(); 
            header("Location: ../Patrones/Template/Admin.php?data=" . urlencode(json_encode($data)));
            exit;
            break;

        case 'POST':
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            Acciones::Insertar($usuario, $contrasena, $email, $telefono);
            break;

        case 'PUT':
            echo Acciones::Actualizar();
            break;

        case 'DELETE':
            $codigo = $_GET['codigo'];
            echo Acciones::Eliminar($codigo);
            break;
    }

?>