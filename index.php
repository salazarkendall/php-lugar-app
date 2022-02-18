<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Iglesia El Lugar | Inicio</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <!-- Line -->
        <div class="line-preloader"></div>
    </div>

    <!-- Login Modal -->
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="logica/loguear.php" method="POST">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Acceder a mi cuenta de miembro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                      <h2 class="fa fa-envelope prefix grey-text"></h2>
                      <input type="text" id="email" name="email" class="form-control validate" placeholder="Email">
                    </div>

                    <div class="md-form mb-4">
                      <h2 class="fa fa-lock"></h2>
                      <input type="password" id="contrasena" name="contrasena" class="form-control validate" placeholder="Contraseña">
                    </div>

                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" value="Ingresar" class="btn crose-btn header-btn"></button>
                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <a href="registromiembro.php" class="tn crose-btn btn-2"><i ></i> <span>Crear una cuenta de miembro</span></a>
                  </div>
                </div>
              </div>
              </form>
            </div>
    <!-- Modal end-->
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex flex-wrap align-items-center justify-content-between">
                            <!-- Top Header Meta -->
                            <div class="top-header-meta d-flex flex-wrap">
                                <a href="#" class="open" data-toggle="tooltip" data-placement="bottom" title=""><i class="fa fa-clock-o" aria-hidden="true"></i> <span>Cultos: Domingos - 9am</span></a>
                                <!-- Social Info -->
                                <div class="top-social-info">
                                    <a href="https://www.facebook.com/iglesiaellugar/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Top Header Meta -->
                            <div class="top-header-meta">
                                <a href="mailto:info@iglesiaellugar.com" class="email-address"><i class="fa fa-envelope" aria-hidden="true"></i> <span>info@iglesiaellugar.com</span></a>
                                <a href="#" class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <span>4030-2650</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Top Header Area ***** -->

        <!-- ***** Navbar Area ***** -->
        <div class="crose-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="croseNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" width="70px" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="nosotros.php">Nosotros</a></li>
                                    <li><a href="mensajes.php">Mensajes</a>
                                    <li><a href="ministerios.php">Ministerios</a></li>
                                    <li><a href="anuncios.php">Anuncios</a></li>
                                    <li><a href="agenda.php">Agenda</a></li>
                                    <li><a href="contacto.php">Contacto</a></li>
                                </ul>

                                <!-- Search Button -->
                                <div id="header-search"><i class="fa fa-search" aria-hidden="true"></i></div>

                                <!-- Donate Button -->
                                <a href="#" class="btn crose-btn header-btn" data-toggle="modal" data-target="#modalLoginForm">Ingresar</a>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>

            
    
            <!-- ***** Search Form Area ***** -->
            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Introduzca el nombre del sermón que busca...">
                                    <button type="submit" class="d-none"></button>
                                </form>
                                <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Navbar Area ***** -->
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/1.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Creando Comunidad</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Conoce más sobre nuestra misión, visión y creencias. Jesús es lo primero.</p>
                            <a href="nosotros.php" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/2.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Más allá de la religión</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Descubre como Dios desea tener una relación personal contigo.</p>
                            <a href="nosotros.php" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>¡Bienvenido a la Iglesia El Lugar!</h2>
                        <p>La iglesia no es un edificio. Es un conjunto de personas pecadoras que han reconocido la salvación que Jesús entregó por medio de la cruz. Atrévete a descubrir el Jesús de la Biblia.</p>
                    </div>
                </div>
            </div>

            <div class="row about-content justify-content-center">
                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/bg-img/3.jpg" alt="">
                        <div class="about-text">
                            <h4>Nuestra Iglesia</h4>
                            <p>Una pequeña comunidad en San Francisco que desea impactar al mundo.</p>
                            <a href="#">Leer más<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/bg-img/4.jpg" alt="">
                        <div class="about-text">
                            <h4>Nuestros Ministerios</h4>
                            <p>Conoce los diferentes equipos que quieren hacer el nombre de Dios conocido.</p>
                            <a href="ministerios.php">Leer más<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/bg-img/5.jpg" alt="">
                        <div class="about-text">
                            <h4>Nuestros Mensajes</h4>
                            <p>Descubre prédicas, sermones y charlas bíblicas.</p>
                            <a href="mensajes.php">Leer más <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <h6>Una familia de fe</h6>
                        <h2>Encuentra un lugar de amor y compañerismo. Todos creciendo juntos.</h2>
                        <a href="contacto.php" class="btn crose-btn btn-2">Me gustaría ser miembro</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    x

    <!-- ##### Gallery Area Start ##### -->
    <div class="gallery-area d-flex flex-wrap">
        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/13.jpg" class="gallery-img" title="Conferencia misionera 2019">
                <img src="img/bg-img/13.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/14.jpg" class="gallery-img" title="Club de Niños">
                <img src="img/bg-img/14.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/15.jpg" class="gallery-img" title="Club de Niños">
                <img src="img/bg-img/15.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/16.jpg" class="gallery-img" title="Trabajos en el templo">
                <img src="img/bg-img/16.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/17.jpg" class="gallery-img" title="Predicación del evangelio">
                <img src="img/bg-img/17.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/18.jpg" class="gallery-img" title="Sermones bíblicos">
                <img src="img/bg-img/18.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/19.jpg" class="gallery-img" title="Coro de la iglesia">
                <img src="img/bg-img/19.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/20.jpg" class="gallery-img" title="Paseo anual">
                <img src="img/bg-img/20.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/21.jpg" class="gallery-img" title="Comunión">
                <img src="img/bg-img/21.jpg" alt="">
            </a>
        </div>

        <!-- Single Gallery Area -->
        <div class="single-gallery-area">
            <a href="img/bg-img/22.jpg" class="gallery-img" title="Gallery Image 10">
                <img src="img/bg-img/22.jpg" alt="">
            </a>
        </div>
    </div>
    <!-- ##### Gallery Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <a href="#" class="footer-logo"><img src="img/core-img/logo.png" width="70px" alt=""></a>
                            <p>Somos una iglesia comprometida a llevar el evangelio de Cristo a la comunidad</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Enlaces rápidos</h5>
                            <nav class="footer-menu">
                                <ul>
                                    <li><a href="index.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Inicio</a></li>
                                    <li><a href="nosotros.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Nosotros</a></li>
                                    <li><a href="mensajes.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Mensajes</a></li>
                                    <li><a href="ministerios.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Ministerios</a></li>
                                    <li><a href="anuncios.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Anuncios</a></li>
                                    <li><a href="agenda.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Agenda</a></li>
                                    <li><a href="contacto.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Reuniones</h5>

                            <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="#">Niños</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> Sábados 9:30am</p>
                            </div>

                             <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="#">Jóvenes</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> Sábados 3pm</p>
                            </div>

                             <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="#">Culto</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> Domingos: 9:00am</p>
                            </div>

                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Contáctenos</h5>

                            <div class="contact-information">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> De VMA San Francisco de Dos Ríos, 200m Sur, San José, CR</p>
                                <a href="callto:001-1234-88888"><i class="fa fa-phone" aria-hidden="true"></i> 001-1234-88888</a>
                                <a href="mailto:info@iglesiaellugar.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@iglesiaellugar.com</a>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Lun - Vie: 8am - 4pm</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copwrite Area -->
        <div class="copywrite-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center flex-wrap">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados. 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>

                    <!-- Footer Social Icon -->
                    <div class="col-12 col-md-6">
                        <div class="footer-social-icon">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>