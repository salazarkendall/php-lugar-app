<?php
    
    function llenarDatos()  
                     {  
                        $output = '';  
                          $conn = mysqli_connect("localhost", "root", "root", "IglesiaElLugar");  
                          $sql .= "SELECT *,TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE()) AS edad FROM persona where (id_permiso=1 or id_permiso=2) and cedula!='invitado'"; 
                          if ($_POST["genero"]=='M') {
                               $sql .= "AND genero='M' "; 
                           } 
                           if ($_POST["genero"]=='F') {
                               $sql .= "AND genero='F' "; 
                           }
                           if ($_POST["edadminima"]!='') {
                               $sql .= "AND TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE())>".$_POST["edadminima"]." "; 
                           }
                           if ($_POST["edadmaxima"]!='') {
                               $sql .= "AND TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE())<".$_POST["edadmaxima"]." "; 
                           }
                           if ($_POST["direccion"]!='') {
                               $sql .= "AND direccion like '%".$_POST["direccion"]."%' "; 
                           }
                           if ($_POST["nombre"]!='') {
                               $sql .= "AND nombre like '%".$_POST["nombre"]."%' "; 
                           }
                           if ($_POST["apellido"]!='') {
                               $sql .= "AND (apellido1 like '%".$_POST["apellido"]."%' or apellido2 like '%".$_POST["apellido"]."%' or CONCAT( apellido1,' ', apellido2 ) LIKE  '%".$_POST["apellido"]."%')"; 
                           }
                          $result = mysqli_query($conn, $sql);  
                          while($row = mysqli_fetch_array($result))  
                          {       
                          $output .= '<tr>  
                                              <td><p>'.$row["cedula"].'</p></td>  
                                              <td><p>'.$row["nombre"]." ".$row["apellido1"]." ".$row["apellido2"].'</p></td>  
                                              <td><p>'.$row["genero"].'</p></td>  
                                              <td><p>'.$row["edad"].'</p></td>
                                              <td><p>'.$row["telefono1"].'</p></td>  
                                              <td><p>'.$row["telefono2"].'</p></td>
                                              <td><p>'.$row["direccion"].'</p></td>  
                                              <td><p>'.$row["email"].'</p></td>

                                         </tr>  
                                              ';  
                          } 
                        
                           
                          return $output;  
                     }
    
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


    if(isset($_POST["generarpdf"]))  
                         {  
                              require_once('tcpdf/tcpdf.php');  
                              $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
                              $obj_pdf->SetCreator(PDF_CREATOR);  
                              $obj_pdf->SetTitle("Reporte - Iglesia El Lugar");  
                              $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
                              $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
                              $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
                              $obj_pdf->SetDefaultMonospacedFont('helvetica');  
                              $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
                              $obj_pdf->SetMargins('10', '10', '2');  
                              $obj_pdf->setPrintHeader(false);  
                              $obj_pdf->setPrintFooter(false);  
                              $obj_pdf->SetAutoPageBreak(TRUE, 10);  
                              $obj_pdf->SetFont('helvetica', '', 11);  
                              $obj_pdf->AddPage();  
                              $content = '';
                              $content = 
                              $content .= '  
                              <h4 align="center">Iglesia Cristiana Misionera El Lugar</h4>
                              <h4 align="center">Reporte de miembros según filtros de búsqueda</h4>
                              <h4 align="center">Fecha: '.date("d-m-Y", strtotime( '-1 days' ) ).'</h4><br />
                              <h4>Filtros:</h4>';

                              if ($_POST["genero"]=='M') {
                               $content .= ' <p>Género: Masculino</p>' ; 
                           } 
                           if ($_POST["genero"]=='F') {
                               $content .= ' <p>Género: Femenino</p>' ; 
                           }
                           if ($_POST["edadminima"]!='') {
                               $content .= ' <p>Edad mínima: '.$_POST["edadminima"].'</p>' ; 
                           }
                           if ($_POST["edadmaxima"]!='') {
                               $content .= ' <p>Edad máxima: '.$_POST["edadmaxima"].'</p>' ; 
                           }
                           if ($_POST["direccion"]!='') {
                               $content .= ' <p>Dirección: '.$_POST["direccion"].'</p>' ; 
                           }
                           if ($_POST["nombre"]!='') {
                               $content .= ' <p>Nombre: '.$_POST["nombre"].'</p>' ; 
                           }
                           if ($_POST["apellido"]!='') {
                               $content .= ' <p>Apellido: '.$_POST["apellido"].'</p>' ; 
                           }



                              
                             $content .= ' 
                              <table border="1" cellspacing="0" cellpadding="3">  
                                   <tr>  
                                        <th width="12%">Cédula</th>  
                                        <th>Nombre Completo</th>  
                                        <th width="8%">Género</th>  
                                        <th width="7%">Edad</th>  
                                        <th width="10%">Teléfono 1</th>  
                                        <th width="10%">Teléfono 2</th>  
                                        <th>Dirección</th>  
                                        <th width="25%">Email</th>  
                                   </tr>  
                              ';  
                              $content .= llenarDatos();  
                              $content .= '</table>';  
                              $obj_pdf->writeHTML($content);  
                              $obj_pdf->Output('Reporte.pdf', 'I');  
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
    <title>Iglesia El Lugar | Reportes</title>

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

    <!-- Insertar Modal -->
           
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
                        <h2>Miembros</h2>
                        <p>Genere un reporte de miembros con los filtros que considere necesarios. Por ejemplo: una lista de jóvenes varones de la iglesia para reuniones de discipulado. Filtre por género masculino y edades de 12 a 25<br><b>Presione buscar para obtener la lista en pantalla o generar pdf para descargar los resultados en un documento.</b></p>
                    </div>
                    <div class="event-search-form mb-50">
                         <form method="post">
                            <div class="row align-items-end">
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <h5>Género</h5>
                                        <select class="form-control validate" name="genero" id="genero">
                                            <option value="">Seleccione un género</option>;
                                            <option value="M">Masculino</option>;
                                            <option value="F">Femenino</option>;
                                         </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <h5>Edad mínima</h5>
                                        <input type="text" name="edadminima" class="form-control" id="eventLocation">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <h5>Edad máxima</h5>
                                        <input type="text" name="edadmaxima" class="form-control" id="eventKeyword">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-2">
                                    <button type="submit" name="generarpdf" class="btn crose-btn btn-2">Generar pdf</button>
                                </div>
                            </div>
                            <br>
                            <div class="row align-items-end">
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <h5>Dirección</h5>
                                        <input type="text" name="direccion" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <h5>Nombre</h5>
                                        <input type="text" name="nombre" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <h5>Apellido</h5>
                                        <input type="text" name="apellido" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-2">
                                    <button type="submit" name="buscar" class="btn crose-btn">Buscar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <td><h5>Cédula</h5></td>
                            <td><h5>Nombre Completo<h5></td>
                            <td><h5>Género<h5></td>
                            <td><h5>Edad<h5></td>
                            <td><h5>Teléfono 1</h5></td>
                            <td><h5>Teléfono 2<h5></td>
                            <td><h5>Dirección<h5></td>
                            <td><h5>Email<h5></td>    
                        </tr>

                    <?php 

                        echo llenarDatos(); 
    
                     ?>
                     
                    </table>
            
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