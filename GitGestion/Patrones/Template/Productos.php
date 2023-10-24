<?php
include_once("Plantilla.php");
include("../Acciones/AccionesAdmin.php");

class Productos extends Plantilla
{
    public function crearHeader()
    {
        echo '
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <div class="mdl-layout-spacer"></div>
        
                    <!-- Cuenta-->      
                    <div class="avatar-dropdown" id="icon">
                        <span>'.$_SESSION['usuario'].'</span>
                        <img src="../Recursos/Imagenes/Logos/blanco.png">
                    </div>
        
                    <!-- Account dropdawn-->
                    <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                        for="icon">
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <span class="material-icons mdl-list__item-avatar"></span>
                            <span>'.$_SESSION['usuario'].'</span>
                                <span class="mdl-list__item-sub-title">'.$_SESSION['correo'].'</span>
                            </span>
                        </li>
        
                        <li class="list__item--border-top"></li>
                        <a href="Paginas/cerrar.php">
                            <li class="mdl-menu__item mdl-list__item">
                                <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-icon">exit_to_app</i>
                                    Cerrar Sesión
                                </span>
                            </li>
                        </a>
                    </ul>
                </div>
            </header>

            <div class="mdl-layout__drawer">
                <header>Aesir</header>
                <div class="scroll__wrapper" id="scroll__wrapper">
                    <div class="scroller" id="scroller">
                        <div class="scroll__container" id="scroll__container">
                            <nav class="mdl-navigation">
                                <a class="mdl-navigation__link" href="../Admin.php">
                                    <i class="material-icons" role="presentation">dashboard</i>
                                    Principal
                                </a>
                                <a class="mdl-navigation__link" href="Usuarios.php">
                                    <i class="material-icons" role="presentation">person</i>
                                    Usuarios
                                </a>
                                <a class="mdl-navigation__link mdl-navigation__link--current" href="Productos.php">
                                    <i class="material-icons" role="presentation">shopping_cart</i>
                                    Productos
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="scroller__bar" id="scroller__bar"></div>
                </div>
            </div>
        ';
    }
    public function crearMain()
    {
        echo '
        
            <main class="mdl-layout__content ">
                <br>
                <div class="mdl-grid ui-tables">
                    <div class="mdl-cell mdl-cell--10-col-desktop mdl-cell--10-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--1dp">
                            <div class="mdl-card__title">
                                <h1 class="mdl-card__title-text">Tabla de Productoss&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                                    <button class="mdl-button button--colored-teal" id="agregar">
                                        <i class="material-icons">add_box</i>
                                        Agregar
                                    </button> 
                            </div>
                            <div class="mdl-card__supporting-text no-padding">
                                <table class="mdl-data-table mdl-js-data-table">
                                    <thead>
                                    <tr>
                                        <th class="mdl-data-table__select">ID</th>
                                        <th class="mdl-data-table__cell--non-numeric">PRODUCTO</th>
                                        <th class="mdl-data-table__cell--non-numeric">MARCA</th>
                                        <th class="mdl-data-table__cell--non-numeric">GRADO ALCOHOL</th>
                                        <th class="mdl-data-table__cell--non-numeric">IBU</th>
                                        <th class="mdl-data-table__cell--non-numeric">INGREDIENTES</th>
                                        <th class="mdl-data-table__cell--non-numeric">PRECIO</th>
                                        <th class="mdl-data-table__select">ACCION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        '.Acciones::MostrarProductos().'
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </main>
        </div>
        ';    
    }
    public function crearFooter()
    {
        echo '
            <!-- MODAL -->
            <div class="modal fade" id="modalCrudEliminar" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="modal-register-label">Eliminar Usuario</h3>
                            <p class="modal">Edite los datos del Usuario:</p>
                            <button type="button" class="btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div> 
                        <div class="modal-body">     
                            <p class="text-white">¿Está seguro de que desea eliminar el Usuario?</p>
                            <p class="text-danger"><small>Esta acción no se puede deshacer.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-warning" data-bs-dismiss="modal" aria-label="Close" value=" Cancelar ">
                            <input type="submit" class="btn btn-danger" value=" Eliminar Usuario ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalCrud" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="modal-register-label">Editar Usuario</h3>
                            <p class="modal">Edite los datos del Usuario:</p>
                            <button type="button" class="btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div> 
                        <div class="modal-body">
                            <form role="form" action="" method="post" class="registration-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Nombre: </label>
                                    <input type="text" name="form-first-name" placeholder="Nombre..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="sr-only" for="form-last-name">Apellido: </label>
                                    <input type="text" name="form-last-name" placeholder="Apellido..." class="form-last-name form-control" id="form-last-name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Edad: </label>
                                    <input type="text" name="form-email" placeholder="Edad..." class="form-email form-control" id="form-email">
                                </div>
                                <br>
                            
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-warning" data-bs-dismiss="modal" aria-label="Close" value=" Cancelar ">
                            <input type="submit" class="btn btn-success" value=" Editar Usuario ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalCrudAgregar" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="modal-register-label">Agregar Usuario</h3>
                            <p class="modal">Ingrese los datos del Usuario:</p>
                            <button type="button" class="btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div> 
                        <div class="modal-body">
                            <form role="form" action="" method="post" class="registration-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Cedula: </label>
                                    <input type="text" name="form-first-name" placeholder="Cedula..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Nombre: </label>
                                    <input type="text" name="form-first-name" placeholder="Nombre..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="sr-only" for="form-last-name">Apellido: </label>
                                    <input type="text" name="form-last-name" placeholder="Apellido..." class="form-last-name form-control" id="form-last-name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Edad: </label>
                                    <input type="text" name="form-email" placeholder="Edad..." class="form-email form-control" id="form-email">
                                </div>
                                <br>
                            
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-warning" data-bs-dismiss="modal" aria-label="Close" value=" Cancelar ">
                            <input type="submit" class="btn btn-success" value=" Agregar Usuario ">
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
}

?>
