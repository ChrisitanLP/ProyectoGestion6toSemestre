<?php

include_once("../Patrones/Singleton/Conexion.php");

class Acciones
{

    public static function MostrarUsuarios()
    {

        $conexion = Conexion::getInstance()->getConexion();
        $consulta = "SELECT * FROM usuarios";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $dato = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $acum = 1;
        $informacion = '';

        foreach ($dato as $respuesta) {
            $informacion .= '
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">' . $acum++ . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['usuario'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['clave'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['email'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['telefono'] . '</td>
                        <td class="mdl-data-table__cell">
                            <center>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal editar">
                                    <i class="material-icons">create</i>Editar</button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red eliminar">
                                    <i class="material-icons">cancel</i>Eliminar
                                </button>
                            </center>
                        </td>
                    </tr>
                ';
        }
        return $informacion;
    }

    public static function MostrarProductos()
    {

        $conexion = Conexion::getInstance()->getConexion();
        $consulta = "SELECT * FROM productos";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $dato = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $acum = 0;
        $informacion = '';

        foreach ($dato as $respuesta) {
            $informacion .= '
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['Cod_Pro'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['Nom_Pro'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['Mar_Pro'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['Gra_Alc_Pro'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['IBU'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['Car_1_Pro'] . ' - ' . $respuesta['Car_2_Pro'] . ' - ' . $respuesta['Car_3_Pro'] . '</td>
                        <td class="mdl-data-table__cell--non-numeric">' . $respuesta['Pre_Pro'] . '</td>
                        <td class="mdl-data-table__cell">
                            <center>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal" id="editar">
                                    <i class="material-icons">create</i>Editar
                                </button> 
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red" id="eliminar">
                                    <i class="material-icons">cancel</i>Eliminar
                                </button>
                            </center>
                        </td>
                    </tr>
                ';
        }
        return $informacion;
    }


    public static function Insertar($usuario, $contrasena, $email, $telefono)
    {
        $rol = 'cliente';

        $conexion = Conexion::getInstance()->getConexion();
        $consulta = "SELECT * FROM usuarios where usuario = '$usuario'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $dato = $resultado->fetch();

        if ($dato) {
            header("location:../Paginas/error.php");
        } else {
            $consulta = "INSERT INTO usuarios (usuario, clave, email, telefono, rol) VALUES('$usuario','$contrasena', '$email', '$telefono', '$rol')";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            header("location:../Paginas/Logeo.php");
        }
    }

    public static function InsertarUsuario($usuario, $contrasena, $email, $telefono)
    {
        $rol = 'cliente';
        $conexion = Conexion::getInstance()->getConexion();
        $consulta = "INSERT INTO usuarios (usuario, clave, email, telefono, rol) VALUES('$usuario','$contrasena', '$email', '$telefono', '$rol')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        header("location:../Paginas/Usuarios.php");
    }

    public static function ActualizarUsuario($usuario, $contrasena, $email, $telefono)
    {
        $conexion = Conexion::getInstance()->getConexion();
        $consulta = "UPDATE usuarios SET clave='$contrasena', email='$email', telefono='$telefono' WHERE usuario='$usuario'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        header("location:../Paginas/Usuarios.php");
    }

    public static function Eliminar()
    {

    }

}

?>