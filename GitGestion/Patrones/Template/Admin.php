<?php
include_once("Plantilla.php");

class Admin extends Plantilla
{
    public function crearHeader()
    {
        echo '
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <div class="mdl-layout-spacer"></div>
                    <div class="avatar-dropdown" id="icon">
                        <span class="nombre-usuario">'.$_SESSION['usuario'].'</span>
                        <img class="perfil-usuario"src="Recursos/Imagenes/Logos/user.png">
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
                                    <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                                    Cerrar Sesión
                                </span>
                            </li>
                        </a>
                    </ul>
                </div>
            </header>

            <div class="mdl-layout__drawer">
                <header>
                    <img class="navlogo" src="Recursos/Imagenes/Logos/blanco.png">
                </header>
                <div class="scroll__wrapper" id="scroll__wrapper">
                    <div class="scroller" id="scroller">
                        <div class="scroll__container" id="scroll__container">
                            <nav class="mdl-navigation">
                                <a class="mdl-navigation__link mdl-navigation__link--current" href="Admin.php">
                                    <i class="material-icons" role="presentation">dashboard</i>
                                    Principal
                                </a>
                                <a class="mdl-navigation__link" href="Paginas/Cuenta.php">
                                    <i class="material-icons" role="presentation">person</i>
                                    Cuenta
                                </a>
                                <div class="sub-navigation">
                                    <a class="mdl-navigation__link">
                                        <i class="material-icons">pages</i>
                                        Paginas
                                        <i class="material-icons" >keyboard_arrow_down</i>
                                    </a>
                                    <div class="mdl-navigation">
                                        <a class="mdl-navigation__link" href="Paginas/Usuarios.php">
                                            Usuarios
                                        </a>
                                        <a class="mdl-navigation__link" href="Paginas/Productos.php">
                                            Productos
                                        </a>
                                        <a class="mdl-navigation__link" href="Paginas/Compras.php">
                                            Compras
                                        </a>
                                    </div>
                                </div>
                                <div class="mdl-layout-spacer"></div>
                                <hr>
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
            <main class="mdl-layout__content">
                <div class="mdl-grid mdl-grid--no-spacing dashboard">

                    <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
                        <!-- Pie chart-->
                        <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                            <div class="mdl-card mdl-shadow--2dp pie-chart">
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">Soporte</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <div class="pie-chart__container">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="result mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone fondo-clima"></div>

                        <!-- Trending widget-->
                        <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                            <div class="mdl-card mdl-shadow--2dp trending">
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">Información</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <ul class="mdl-list">
                                        <li class="mdl-list__item">
                                            <span class="mdl-list__item-primary-content list__item-text"># Usuarios</span>
                                            <span class="mdl-list__item-secondary-content">
                                                <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                            </span>
                                            <span class="mdl-list__item-secondary-content trending__percent"></span>
                                        </li>
                                        <li class="mdl-list__item list__item--border-top">
                                            <span class="mdl-list__item-primary-content list__item-text"># Productos</span>
                                            <span class="mdl-list__item-secondary-content">
                                                <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                            </span>
                                            <span class="mdl-list__item-secondary-content trending__percent"></span>
                                        </li>
                                        <li class="mdl-list__item list__item--border-top">
                                            <span class="mdl-list__item-primary-content list__item-text "># Compras</span>
                                            <span class="mdl-list__item-secondary-content">
                                                <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                            </span>
                                            <span class="mdl-list__item-secondary-content trending__percent"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Cotoneaster card-->
                        <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--2-col-phone">
                            <div class="mdl-card mdl-shadow--2dp cotoneaster">
                                <div class="mdl-card__title mdl-card--expand">
                                    <h2 class="mdl-card__title-text">Cervecería INTI</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <div>
                                        Ser la cervecera artesanal preferida y reconocida en nuestra comunidad, ofreciendo cervezas únicas y de alta calidad que inspiren a nuestros clientes a apreciar la artesanía cervecera y a compartir momentos inolvidables con amigos y familia.
                                    </div>
                                    <a href="Index.php" target="_blank">Ver Página</a>
                                </div>
                            </div>
                        </div>

                        <!-- ToDo_widget-->
                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--2-col-phone">
                            <div class="mdl-card mdl-shadow--2dp todo">
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text">Lista Actividades</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <ul class="mdl-list">

                                    </ul>
                                </div>
                                <div class="mdl-card__actions">
                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect">Eliminar Actividad</button>
                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab mdl-shadow--8dp mdl-button--colored ">
                                        <i class="material-icons mdl-js-ripple-effect">add</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        ';    
    }
    public function crearFooter()
    {
        echo '
        ';
    }
}

?>
