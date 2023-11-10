<?php
    include_once("AccionesAdmin.php");

    $accion = $_SERVER['REQUEST_METHOD'];
    switch ($accion) {
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
                    $rol = $_POST['rolE'];
                    Acciones::ActualizarUsuario($usuario, $contrasena, $email, $telefono, $rol);
                    break;

                case 3:
                    $usuario = $_POST['usuario_val'];
                    Acciones::EliminarUsuaio($usuario);
                    break;

                case 4:
                    $usuario = $_POST['usuario'];
                    $contrasena = $_POST['contrasena'];
                    $email = $_POST['email'];
                    $telefono = $_POST['telefono'];
                    Acciones::Insertar($usuario, $contrasena, $email, $telefono);
                    break;
            
                case 5:
                    $cliente = $_POST['clienteI'];
                    $subtotal = $_POST['subtotal'];
                    $total = $_POST['totalI'];
                    $producto = $_POST['productoI'];
                    Acciones::InsertarCompra($cliente, $subtotal, $total, $producto);
                    break;

                case 6:
                    $usuario = $_POST['usuario_valor'];
                    $contrasena = $_POST['claveE'];
                    $email = $_POST['emailE'];
                    $telefono = $_POST['telefonoE'];
                    Acciones::ActualizarCompra($usuario, $contrasena, $email, $telefono);
                    break;

                case 7:
                    $codigo = $_POST['codigo_val'];
                    Acciones::EliminarCompra($codigo);
                    break;

                default:
                    header("location:../Paginas/Usuarios.php");
                    break;
            }
        break;
    }
?>