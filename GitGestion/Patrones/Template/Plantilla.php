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

        public function crearPagina(){
            $this -> crearHeader();
            $this -> crearMain();
            $this -> crearFooter();
        }
    }

?>