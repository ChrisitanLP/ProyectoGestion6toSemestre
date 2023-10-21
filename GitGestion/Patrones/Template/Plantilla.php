<?php
    abstract class Plantilla{

        public abstract function crearHeader();
        public abstract function crearMain();
        public abstract function crearFooter();
        
        public function verificarSesionPaginas(){
            session_start();

            if (isset($_SESSION['usuario'])){
                $_SESSION['usuario'];
            }else{
                header('Location: Logeo.php');
                die() ;
            }
        }

        public function verificarSesionIndex(){
            session_start();

            if (isset($_SESSION['usuario'])){
                $_SESSION['usuario'];
            }else{
                header('Location: Paginas/Logeo.php');
                die() ;
            }
        }

        function verificarTipoUsuario(){
            session_start();
            if (isset($_SESSION['usuario'])) {
                if($_SESSION['rol'] == 'admin'){
                    header('Location: Admin.php');
                }else{
                    header('Location: index.php');
                }
            }
        }

        public function crearPagina(){
            $this -> crearHeader();
            $this -> crearMain();
            $this -> crearFooter();
        }
    }

?>