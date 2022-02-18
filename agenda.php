<?php
    
    function llenarDatos()  {  
      $output = ''; 
      if(isset($_POST['filtrar'])){
        $output.='<!-- Events Title -->
                    <div class="col-12">
                        <div class="events-title">
                            <h2>Eventos de acuerdo a búsqueda</h2>
                        </div>
                    </div>';
                          $conn = mysqli_connect("localhost", "root", "root", "IglesiaElLugar");  
                          $sql .= "SELECT evento.*, ministerio.nombre as nombreMinisterio FROM evento INNER JOIN ministerio ON evento.id_ministerio = ministerio.id_ministerio where fecha>CURDATE() "; 
                          if ($_POST["ministerio"]!='todos') {
                               $sql .= "AND evento.id_ministerio=".$_POST["ministerio"]." "; 
                           }
                          $result = mysqli_query($conn, $sql);  

                          $cont=0;
                          while($row = mysqli_fetch_array($result))  
                          {
                          $cont=$cont+1;   

                          if (file_exists("img/eventos/".$row['id_evento'].".jpg")) {
                            $output .= 
                          '<div class="col-12">
                          <!-- Single Upcoming Events Area -->
                          <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                              <!-- Thumbnail -->
                              <div class="upcoming-events-thumbnail">
                                  <img src="img/eventos/'.$row['id_evento'].'.jpg" alt="">
                              </div>
                              <!-- Content -->
                              <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                                  <div class="events-text">
                                      <h4>'.$row['nombre'].'</h4>
                                      <div class="events-meta">
                                          <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['fecha'].'</a>
                                          <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Organiza: '.$row['nombreMinisterio'].'</a>
                                          <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Iglesia El Lugar</a>
                                      </div>
                                      <p>'.$row['descripcion'].'</p>
                                  </div>
                                  <div class="find-out-more-btn">
                                      <a href="contacto.php" class="btn crose-btn btn-2">Solicitar información</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                          ';
                          }
                          else{
                            $output .= 
                          '<div class="col-12">
                          <!-- Single Upcoming Events Area -->
                          <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                              <!-- Thumbnail -->
                              <div class="upcoming-events-thumbnail">
                                  <img src="img/bg-img/109.jpg" alt="">
                              </div>
                              <!-- Content -->
                              <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                                  <div class="events-text">
                                      <h4>'.$row['nombre'].'</h4>
                                      <div class="events-meta">
                                          <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['fecha'].'</a>
                                          <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Organiza: '.$row['nombreMinisterio'].'</a>
                                          <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Iglesia El Lugar</a>
                                      </div>
                                      <p>'.$row['descripcion'].'</p>
                                  </div>
                                  <div class="find-out-more-btn">
                                      <a href="contacto.php" class="btn crose-btn btn-2">Solicitar información</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                          ';
                          }

                          }

                          if ($cont==0) {
                            $output .= '<div class="col-12">
                                      <p>No hay eventos que coincidan con los criterios de búsqueda</p>
                                  </div>';
                          }
                    ;
      }
      else{
          $output.='<!-- Events Title -->
                    <div class="col-12">
                        <div class="events-title">
                            <h2>Eventos en los próximos 30 días</h2>
                        </div>
                    </div>';
                          $conn = mysqli_connect("localhost", "root", "root", "IglesiaElLugar");  
                          $sql .= "SELECT evento.*, ministerio.nombre as nombreMinisterio FROM evento INNER JOIN ministerio ON evento.id_ministerio = ministerio.id_ministerio where fecha BETWEEN CURDATE() AND CURDATE() + INTERVAL 30 DAY"; 
                          $result = mysqli_query($conn, $sql);  

                          $cont=0;
                          while($row = mysqli_fetch_array($result))  
                          {
                          $cont=$cont+1;       
                          if (file_exists("img/eventos/".$row['id_evento'].".jpg")) {
                            $output .= 
                          '<div class="col-12">
                          <!-- Single Upcoming Events Area -->
                          <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                              <!-- Thumbnail -->
                              <div class="upcoming-events-thumbnail">
                                  <img src="img/eventos/'.$row['id_evento'].'.jpg" alt="">
                              </div>
                              <!-- Content -->
                              <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                                  <div class="events-text">
                                      <h4>'.$row['nombre'].'</h4>
                                      <div class="events-meta">
                                          <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['fecha'].'</a>
                                          <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Organiza: '.$row['nombreMinisterio'].'</a>
                                          <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Iglesia El Lugar</a>
                                      </div>
                                      <p>'.$row['descripcion'].'</p>
                                  </div>
                                  <div class="find-out-more-btn">
                                      <a href="contacto.php" class="btn crose-btn btn-2">Solicitar información</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                          ';
                          }
                          else{
                            $output .= 
                          '<div class="col-12">
                          <!-- Single Upcoming Events Area -->
                          <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                              <!-- Thumbnail -->
                              <div class="upcoming-events-thumbnail">
                                  <img src="img/bg-img/109.jpg" alt="">
                              </div>
                              <!-- Content -->
                              <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                                  <div class="events-text">
                                      <h4>'.$row['nombre'].'</h4>
                                      <div class="events-meta">
                                          <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['fecha'].'</a>
                                          <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Organiza: '.$row['nombreMinisterio'].'</a>
                                          <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Iglesia El Lugar</a>
                                      </div>
                                      <p>'.$row['descripcion'].'</p>
                                  </div>
                                  <div class="find-out-more-btn">
                                      <a href="contacto.php" class="btn crose-btn btn-2">Solicitar información</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                          ';
                          }
                          }

                          if ($cont==0) {
                            $output .= '<div class="col-12">
                                      <p>No hay eventos próximos</p>
                                  </div>';
                          }
                    ;
      }
                          return $output;  
                     }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Iglesia El Lugar | Agenda</title>

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
                            <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
    <div class="events-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Agenda</h2>
                        <p>Conozca los próximos eventos de la Iglesia. ¡No pierda la oportunidad de ser parte!</p>
                    </div>
                    <div class="event-search-form mb-50">
                         <form method="post">
                            <br>
                            <div class="row align-items-end">
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <h5>Ministerio</h5>
                                        <select class="form-control" name="ministerio" id="ministerio">
                                            <option value="todos">Todos</option>
                                        <?php 
                                            $conexion=mysqli_connect('localhost','root','root','IglesiaElLugar');
                                            $sql="SELECT * from ministerio";
                                            $result=mysqli_query($conexion,$sql);

                                            while($mostrar=mysqli_fetch_array($result)){
                                            echo '<option value="'.$mostrar['id_ministerio'].'">'.$mostrar['nombre'].'</option>';
                                        }
                                         ?>
                                         </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-2">
                                    <button type="submit" name="filtrar" class="btn crose-btn">Filtrar</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <?php 

                        echo llenarDatos(); 
    
                     ?>
                    <br><br><br><br>
                <div class="col-12">
                        <div class="events-title">
                            <h2>Todos los eventos</h2>
                        </div>
                        <br><br>
                    <table class="table table-striped">
                        <tr>
                            <td><h5>Fecha<h5></td>
                            <td><h5>Evento<h5></td>
                            <td><h5>Ministerio que organiza<h5></td>
                            <td><h5>Descripción<h5></td>
                            <td><h5>Imagen<h5></td>
                        </tr>

                        <?php 
                        $conexion=mysqli_connect('localhost','root','root','IglesiaElLugar');
                        $sql="SELECT evento.*, ministerio.nombre as nombreMinisterio FROM evento INNER JOIN ministerio ON evento.id_ministerio = ministerio.id_ministerio order by fecha desc";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td><p>".$mostrar['fecha']."<p></td>";
                        echo "<td><p>".$mostrar['nombre']."<p></td>";
                        echo "<td><p>".$mostrar['nombreMinisterio']."<p></td>";
                        echo "<td><p>".$mostrar['descripcion']."<p></td>";
                        if (file_exists("img/eventos/".$mostrar['id_evento'].".jpg")) {
                            echo "<td><img src='img/eventos/".$mostrar['id_evento'].".jpg' height='200' width='200'></td>";
                        }
                        else{
                            echo "<td><p>No hay imagen para el evento</p></td>";
                        }
                        echo "</tr>";
                    }
                     ?>
                     
                    </table>
            </div>
                     
            
                    <div class="modal-footer d-flex justify-content-center">
                    <a href="inicio.php" class="btn crose-btn btn-2"><i ></i> <span>Volver al inicio</span></a>
                  </div>
            </div>
            </div>
        </div>
    </div>
    <!-- ##### Events Area End ##### -->

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