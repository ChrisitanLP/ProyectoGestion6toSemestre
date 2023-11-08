<?php
include_once("Plantilla.php");

class Index extends Plantilla
{
    public function crearHeader()
    {
        echo '
        <div class="contenedor-fluido p-0 nav-bar">
            <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
                <a href="index.html" class="navbar-brand px-lg-4 m-0">
                    <img class="navlogo" src="Recursos/Imagenes/Logos/blanco.png">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto p-4">
                        <a href="index.php" class="nav-item nav-link active text-uppercase">Inicio</a>
                        <a href="Paginas/Tienda.php" class="nav-item nav-link text-uppercase">Tienda</a>
                        <a href="Paginas/Servicio.php" class="nav-item nav-link text-uppercase">Servicio</a>
                        <a href="Paginas/Nosotros.php" class="nav-item nav-link text-uppercase">Nosotros</a>
                        <a href="Paginas/Contacto.php" class="nav-item nav-link text-uppercase">Contacto</a>
                        <a href="Paginas/cerrar.php" class="nav-item nav-link text-uppercase"><i class="far fa-user"></i></a>
                    </div>
                </div>
            </nav>
        </div>
        ';
    }
    public function crearMain()
    {
        echo '
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="container-img" src="Recursos/Imagenes/Fondos/dispensador.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <h2 class="text-primary font-weight-medium m-0">Piensa Independiente</h2>
                            <h1 class="display-1 text-white m-0 text-uppercase titleCarousel">Cervecería INTI</h1>
                            <h2 class="text-white m-0">* Piensa Artesanal *</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="container-img" src="Recursos/Imagenes/Fondos/botellas.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <h2 class="text-primary font-weight-medium m-0">Pasión por lo que hacemos</h2>
                            <h1 class="display-1 text-white m-0 text-uppercase titleCarousel">Cervecería INTI</h1>
                            <h2 class="text-white m-0">* Piensa Artesanal *</h2>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <!-- Carousel End -->

        <div class="contenedor-fluido py-5">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sobre Nosotros</h4>
                    <h1 class="display-4 text-primary">Sirviendo desde 2021</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 py-0 py-lg-5">
                        <h1 class="mb-3 text-primary">Nuestra Historia</h1>
                        <h5 class="mb-3 text-white">Con una sólida base de conocimientos y experiencia en la elaboración de cerveza, se decide escribir un plan de negocios detallado.</h5>
                        <p class="text-white"> "Cervezas Artesanales INTI" sigue prosperando. La empresa ha expandido su alcance y se enorgullece de su compromiso con la comunidad, la sostenibilidad y la producción de cerveza artesanal de alta calidad. </p>
                    </div>
                    <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="Recursos/Imagenes/Fondos/Vasos.png" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4 py-0 py-lg-5">
                        <h1 class="mb-3 text-primary">Nuestra Visión</h1>
                        <p class="text-white">"Ser la cervecera artesanal preferida y reconocida en nuestra comunidad, ofreciendo cervezas únicas y de alta calidad que inspiren a nuestros clientes a apreciar la artesanía cervecera y a compartir momentos inolvidables con amigos y familia."</p>
                        <h5 class="mb-3 text-white"><i class="fa fa-check text-primary mr-3 "></i>Calidad y Variedad</h5>
                        <h5 class="mb-3 text-white"><i class="fa fa-check text-primary mr-3 "></i>Expansión Controlada</h5>
                        <h5 class="mb-3 text-white"><i class="fa fa-check text-primary mr-3 "></i>Reconocimiento Regional</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonios</h4>
                    <h1 class="display-4 text-primary">Nuestros Clientes dicen</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                            <div class="ml-3">
                                <h4>Client Name</h4>
                                <i>Profession</i>
                            </div>
                        </div>
                        <p class="m-0 text-white">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="Recursos/Imagenes/Logos/blanco.png" alt="">
                            <div class="ml-3">
                                <h4>Client Name</h4>
                                <i>Profession</i>
                            </div>
                        </div>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                            <div class="ml-3">
                                <h4>Client Name</h4>
                                <i>Profession</i>
                            </div>
                        </div>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-4.jpg" alt="">
                            <div class="ml-3">
                                <h4>Client Name</h4>
                                <i>Profession</i>
                            </div>
                        </div>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        ';
                    
    }
    public function crearFooter()
    {
        echo '
        <div class="contenedor-fluido footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
            <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4 titleFooter" style="letter-spacing: 3px;">Contactanos</h4>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Av. Los Chasquis y Río Payamino</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>0985184705</p>
                    <p class="m-0"><i class="fa fa-envelope mr-2"></i>clopez6341@uta.edu.ec</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4 titleFooter" style="letter-spacing: 3px;">Siguenos</h4>
                    <p>Siguenos en nuestras Redes Sociales</p>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://twitter.com/LpRistian"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/gatito123456789"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/chris_idor/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4 titleFooter" style="letter-spacing: 3px;">Horario Atención</h4>
                    <div>
                        <h6 class="text-white text-uppercase">Lunes - Viernes</h6>
                        <p>8.00 AM - 8.00 PM</p>
                        <h6 class="text-white text-uppercase">Sabados</h6>
                        <p>2.00 PM - 8.00 PM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4 titleFooter" style="letter-spacing: 3px;">Iniciar Sesión</h4>
                    <p></p>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Email...">
                            <div class="input-group-append">
                                <button class="btn btn-primary font-weight-bold px-3">Ingresar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor-fluido text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
                <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">ChrisLP</a>. Todos los Derechos Reservados.</a></p>
                <p class="m-0 text-white">Diseñado por <a class="font-weight-bold" href="https://htmlcodex.com">ChrisLP</a></p>
            </div>
        </div>
   
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
        ';
    }
}
?>
