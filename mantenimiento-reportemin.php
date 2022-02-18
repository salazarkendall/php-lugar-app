<?php
    session_start();
    $emailSesion = $_SESSION['username'];
    
    $servername = "localhost";
    $database = "IglesiaElLugar";
    $username = "root";
    $password = "root";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['enviar']))
                {
                    //Tomar ID de anuncio para guardar imagen
                    $conexion=mysqli_connect('localhost','root','root','IglesiaElLugar');
                    $query="SELECT max(id_reporte_ministerio)+1 as id_maximo from reporte_ministerio";
                    $resultado=mysqli_query($conexion,$query);

                    $nombreImagen='';
                    while($mostrar=mysqli_fetch_array($resultado)){
                        $nombreImagen=$mostrar['id_maximo'];
                    }


                        $imagen = $_FILES['imagen']['name'];

                        // image file directory
                        $target = "img/reportes_min/".$nombreImagen.".jpg";

                    $sql = "INSERT into reporte_ministerio (id_ministerio, nombre, reporte,imagen)
                        VALUES (".$_POST["ministerio"].",'".$_POST["nombre"]."','".$_POST["reporte"]."','".$_POST["imagen"]."')";

                    $result = mysqli_query($conn,$sql);
                    $message = 'Reporte de ministerio agregado';

                    echo "<SCRIPT type='text/javascript'> //not showing me this
                            alert('$message');
                    window.location.replace(\"mantenimiento-reportemin.php\");
                    </SCRIPT>";

                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target)) {
                        $msg = "Imagen cargada satisfactoriamente";
                    }else{
                        $msg = "Ocurrió un error al cargar la imagen";
                    }
                }
        mysqli_close($conn);                       
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
    <title>Iglesia El Lugar | Mantenimiento</title>

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
            <form action="mantenimiento-reportemin.php" method="POST" enctype="multipart/form-data">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Agregar reporte de ministerio</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body mx-3">
                    <div class="md-form mb-4">
                    <h5>Ministerio:</h5>
                    <select class="form-control validate" name="ministerio" id="ministerio">
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

                    <div class="md-form mb-4">
                      <input type="text" id="nombre" name="nombre" class="form-control validate" placeholder="Nombre del reporte (usualmente un rango de meses)">
                    </div>

                    <div class="md-form mb-4">
                      <input type="text" id="reporte" name="reporte" class="form-control validate" placeholder="Link del PDF con el reporte">
                    </div>

                    <div class="md-form mb-4">
                        <h5>Imagen:</h5>
                      <input type="file" accept=".jpg" name="imagen" class="form-control validate" placeholder="imagen">
                    </div>

                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" name="enviar" value="Enviar" class="btn crose-btn header-btn"></button>
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
                                    <li><a href="inicio-admin.php">Inicio</a>
                                    <li><a href="mantenimiento.php">Mantenimiento</a>
                                        <ul class="dropdown">
                                            <li><a href="mantenimiento-miembros.php">Miembros</a></li>
                                            <li><a href="mantenimiento-mensajes.php">Mensajes</a></li>
                                            <li><a href="mantenimiento-anuncios.php">Anuncios</a></li>
                                            <li><a href="mantenimiento-agenda.php">Agenda</a></li>
                                            <li><a href="mantenimiento-ministerios.php">Ministerios</a></li>
                                            <li><a href="mantenimiento-reportemin.php">Reporte Ministerio</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="financiero.php">Financiero</a>
                                        <ul class="dropdown">
                                            <li><a href="financiero-ofrenda.php">Ofrenda</a></li>
                                            <li><a href="financiero-gasto.php">Gasto</a></li>
                                            <li><a href="financiero-activo.php">Activo</a></li>
                                            <li><a href="financiero-deuda.php">Deuda</a></li>
                                            <li><a href="financiero-pago.php">Pago</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="reportes.php">Reportes</a>
                                        <ul class="dropdown">
                                            <li><a href="reportes-miembros.php">Miembros</a></li>
                                            <li><a href="reportes-personasinteresadas.php">Interesados</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="seguridad.php">Seguridad</a>
                                        <ul class="dropdown">
                                            <li><a href="seguridad-aprobarmiembros.php">Aprobar Miembros</a></li>
                                            <li><a href="seguridad-permisos.php">Permisos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="ayuda.php">Ayuda</a>
                                        <ul class="dropdown">
                                            <li><a href="ayuda-version.php">Versión</a></li>
                                            <li><a href="ayuda-manualusuario.php">Manual Usuario</a></li>
                                            <li><a href="ayuda-editarperfil.php?email=<?php echo $emailSesion;?>">Editar perfil</a></li>
                                        </ul>
                                    </li>

                                </ul>

                                <!-- Search Button -->
                                <div id="header-search"><i class="fa fa-search" aria-hidden="true"></i></div>

                                <!-- Donate Button -->
                                <a href="logica/salir.php" class="btn crose-btn header-btn">Salir</a>

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

            
    
            <!-- ***** Search Form Area ***** -->
            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Introduzca el nombre del miembro que busca">
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

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Reportes de ministerio</h2>
                        <p>Gestioná los reportes de ministerio.</p>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <td><h5>Ministerio<h5></td>
                            <td><h5>Nombre del reporte<h5></td>
                            <td><h5>Link del reporte PDF<h5></td>
                            <td><h5>Imagen<h5></td>
                            <td colspan="2" align="center"><h5>Acciones<h5></td>   
                        </tr>

                        <?php 
                        $conexion=mysqli_connect('localhost','root','root','IglesiaElLugar');
                        $sql="SELECT reporte_ministerio.*, ministerio.nombre as nombreMinisterio FROM reporte_ministerio INNER JOIN ministerio ON reporte_ministerio.id_ministerio = ministerio.id_ministerio";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td><p>".$mostrar['nombreMinisterio']."<p></td>";
                        echo "<td><p>".$mostrar['nombre']."<p></td>";
                        echo "<td><p class='btn btn-light'><a href=".$mostrar['reporte'].">Ver PDF</a><p></td>";
                        if (file_exists("img/reportes_min/".$mostrar['id_reporte_ministerio'].".jpg")) {
                            echo "<td><img src='img/reportes_min/".$mostrar['id_reporte_ministerio'].".jpg' height='200' width='200'></td>";
                        }
                        else{
                            echo "<td><p>No hay imagen para el reporte de ministerio</p></td>";
                        }
                        echo "<td><p class='btn btn-light'><a href=modificarreportemin.php?id_reporte_ministerio=".$mostrar['id_reporte_ministerio'].">Modificar</a><p></td>";
                        echo "<td><p class='btn btn-light' ><a href=validareliminacion.php?tabla=reportemin&id_reporte_ministerio=".$mostrar['id_reporte_ministerio'].">Eliminar</a><p></td>";

                        echo "</tr>";
                    }
                     ?>
                     
                    </table>
            
                    <div class="modal-footer d-flex justify-content-center">
                    <a href="" class="btn crose-btn header-btn" data-toggle="modal" data-target="#modalLoginForm"><i ></i> <span>Nuevo Registro</span></a>
                  </div>
                    <div class="modal-footer d-flex justify-content-center">
                    <a href="inicio-admin.php" class="btn crose-btn btn-2"><i ></i> <span>Volver al inicio</span></a>
                  </div>
            </div>

        </div>
    </section>
    <!-- ##### About Area End ##### -->

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
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> Sábados: 9:30am</p>
                            </div>

                             <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <a href="#">Jóvenes</a>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> Sábados: 3pm</p>
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
                            <h5 class="widget-title">Contacto</h5>

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