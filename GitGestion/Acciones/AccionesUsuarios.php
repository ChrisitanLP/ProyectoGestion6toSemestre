<?php

    include_once("../Patrones/Singleton/Conexion.php");

    class Acciones{
        
        public static function Mostrar(){
            $conexion = Conexion::getInstance() -> getConexion();
            $consulta = "SELECT * FROM usuarios";
            $resultado = $conexion -> prepare($consulta);
            $resultado -> execute();
            $dato = $resultado->fetch();

            $acum = 0;
            $informacion = '';

            foreach ($informacion as $respuesta){
                $respuesta.='
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">'.$acum++.'</td>
                        <td class="mdl-data-table__cell--non-numeric">'.$respuesta['usuario'].'</td>
                        <td class="mdl-data-table__cell--non-numeric">'.$respuesta['clave'].'</td>
                        <td class="mdl-data-table__cell--non-numeric">'.$respuesta['correo'].'</td>
                        <td class="mdl-data-table__cell--non-numeric">'.$respuesta['telefono'].'</td>
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

        public static function Insertar($usuario, $contrasena, $email, $telefono){
            $rol = 'cliente';

            $conexion = Conexion::getInstance() -> getConexion();
            $consulta = "SELECT * FROM usuarios where usuario = '$usuario'";
            $resultado = $conexion -> prepare($consulta);
            $resultado -> execute();
            $dato = $resultado->fetch();
    
            if ($dato) {
                header("location:../Paginas/error.php");
            } else {
                $consulta = "INSERT INTO usuarios (usuario, clave, email, telefono, rol) VALUES('$usuario','$contrasena', '$email', '$telefono', '$rol')";
                $resultado = $conexion -> prepare($consulta);
                $resultado -> execute();
                header("location:../Paginas/Logeo.php");
            }
        }

        public static function Actualizar(){
            
        }

        public static function Eliminar(){
            
        }

    }

?>