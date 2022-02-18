<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Iglesia El Lugar</title>

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
                    <a href="registromiembro.php" class="btn crose-btn btn-2"><i ></i> <span>Crear una cuenta de miembro</span></a>
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
                                    <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter...">
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

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Mensajes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">¿Cómo ser salvo?</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Sermons Area Start ##### -->
    <div class="sermons-details-area section-padding-100" align="center">
        <div class="container">
            <div ">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="sermons-details-area">

                        <!-- Sermons Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h2 class="post-title mb-30">¿Cómo ser salvo? ¿Puedo tener certeza hoy?</h2>
                                <img class="mb-30" src="img/bg-img/31.png" alt="">

                                <p>La pregunta más importante es una que hoy en día aparentemente nadie se hace. Sin embargo, una lectura rápida a la Biblia nos muestra que esta es una pregunta que ha intrigado a los hombres desde el principio.<br><br>

                                - Hechos 16:30: Y sacándolos, les dijo: Señores, ¿qué debo hacer para ser salvo?<br>
                                - Mateo 19:16: Entonces vino uno y le dijo: Maestro bueno, ¿qué bien haré para tener la vida eterna?<br>
                                - Lucas 10:25: Y he aquí un intérprete de la ley se levantó y dijo, para probarle: Maestro, ¿haciendo qué cosa heredaré la vida eterna?<br>
                                - Job 25:4: ¿Cómo, pues, se justificará el hombre para con Dios? ¿Y cómo será limpio el que nace de mujer? <br>
                                - Salmos 15:1: Jehová, ¿quién habitará en tu tabernáculo? ¿Quién morará en tu monte santo?<br>
                                - Proverbios 20:9: ¿Quién podrá decir: Yo he limpiado mi corazón, Limpio estoy de mi pecado?<br>
                                - Nahúm 1:6: ¿Quién permanecerá delante de su ira? ¿y quién quedará en pie en el ardor de su enojo?<br>
                                - Mat.19:25: Sus discípulos, oyendo esto, se asombraron en gran manera, diciendo: ¿Quién, pues, podrá ser salvo?<br>
                                - Apocalipsis 6:17: Porque el gran día de su ira ha llegado; ¿y quién podrá sostenerse en pie?<br><br>
                                Entonces, ¿cuál es la pregunta más importante del ser humano? Es esta: ¿cómo puedo estar bien con Dios desde ahora y por la eternidad? En otras palabras, ¿cómo puedo ser salvo?<br><br>

                                Ahora bien, hay otra pregunta oculta entre estos versículos. Una segunda pregunta clave. ¿Qué pasaría si mueres sin estar bien con Dios? La respuesta la encontramos en la Biblia:

                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“En llama de fuego, para dar retribución a los que no conocieron a Dios, ni obedecen al evangelio de nuestro Señor Jesucristo;  los cuales sufrirán pena de eterna perdición, excluidos de la presencia del Señor y de la gloria de su poder” </h6>
                                        <h6>2 Tesalonicenses 1:8-9</h6>
                                    </div>
                                </blockquote>

                                <p>
                                Una lectura regular te llevaría a la siguiente conclusión: irías al infierno por la eternidad.<br><br>

                                En el mismo texto hallamos la respuesta a la Gran pregunta: ¿Cómo puedo ser salvo? El evangelio de nuestro Señor Jesucristo.

                                Dice el evangelio:

                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“Porque de tal manera amó Dios al mundo, que ha dado a su Hijo unigénito, para que todo aquel que en él cree, no se pierda, mas tenga vida eterna.” </h6>
                                        <h6>Juan 3:16</h6>
                                    </div>
                                </blockquote>

                                <p>La buena noticia es que Cristo murió para salvarnos. Él recibió el castigo de los culpables, la ira justa del Santo Dios, fue puesta sobre Él en la cruz.<br><br>

                                Según la Ley de Dios, nosotros somos culpables. Quebrantamos los mandamientos todos los días de nuestra vida. No hay forma de escapar del juicio de Dios.<br><br>

<b>Romanos 3:19:</b> "Pero sabemos que todo lo que la ley dice, lo dice a los que están bajo la ley, para que toda boca se cierre y todo el mundo quede bajo el juicio de Dios."<br><br>
El condenado por la Ley es culpable aunque haya hecho también cosas buenas.<br><br>

Sería ridículo que un estafador culpable plantee su libertad a su Juez porque fue un buen esposo. Las buenas obras no quitan la culpa ni otorgan perdón ni en la ley de los hombres ni en la justicia de Dios.<br><br>

                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“Porque por gracia sois salvos por medio de la fe; y esto no de vosotros, pues es don de Dios; no por obras, para que nadie se gloríe” </h6>
                                        <h6>Efesios 2:8-9</h6>
                                    </div>
                                </blockquote>
 
<p>El condenado necesita un indulto inmerecido, una gracia extraordinaria que sea a la vez legal.<br><br>

                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“Mas Dios muestra su amor para con nosotros, en que siendo aún pecadores, Cristo murió por nosotros.” </h6>
                                        <h6>Romanos 5:8</h6>
                                    </div>
                                </blockquote>

<p>Ese pago fue cancelado para los que creen. No es solo una verdad teológica, sino también una realidad histórica. Jesús exclamó colgado allí en la cruz y anticipando su muerte:<br><br>

<b>Juan 19:30:</b> "Cuando Jesús hubo tomado el vinagre, dijo: Consumado es. Y habiendo inclinado la cabeza, entregó el espíritu.
“Consumado es” significa que la deuda judicial ante Dios del pecador ha sido pagada, cancelada. ¡Gloria a Dios por la obra de Cristo a nuestro favor!"<br><br>

Dice ahora el evangelio:

<b>Marcos 1:15</b>: "El tiempo se ha cumplido, y el reino de Dios se ha acercado; arrepentíos, y creed en el evangelio."<br><br>
Huye de tu pecado humildemente a Cristo. En fe, cree en el Cristo vivo, resucitado de los muertos, triunfante, sentado a la diestra del Padre. Él es Salvador de todo aquel que, arrepentido de su pecado, cree en Él.<br><br></p>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/33.png" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <h5>Alonso Angulo</h5>
                                            <p>Pastor</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- ##### Sermons Area End ##### -->

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
                                <a href="mailto:info.deercreative@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@iglesiaellugar.com</a>
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
                            <a href="https://www.facebook.com/iglesiaellugar/"><i class="fa fa-facebook" aria-hidden="true"></i></a>

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