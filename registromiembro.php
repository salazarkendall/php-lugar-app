<?php
    $servername = "localhost";
    $database = "IglesiaElLugar";
    $username = "root";
    $password = "root";

    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $genero = $_POST["genero"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $telefono1 = $_POST["telefono1"];
    $telefono2 = $_POST["telefono2"];
    $direccion = $_POST["direccion"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $confcontrasena = $_POST["confcontrasena"];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['enviar']))
                {
                      if ($contrasena==$confcontrasena) {
                        $error_encontrado="";
                       if (validar_clave($contrasena, $error_encontrado)&&validar_cedula($cedula, $error_encontrado)){
                          $sql = "INSERT into persona (cedula, id_permiso, nombre, apellido1, apellido2, genero, fecha_nacimiento, telefono1, telefono2, direccion, email, contrasena, comentario_adicional, estado)
                        VALUES ('$cedula',3,'$nombre','$apellido1','$apellido2','$genero','$fecha_nacimiento','$telefono1','$telefono2','$direccion','$email','$contrasena','','activo')";

                    $result = mysqli_query($conn,$sql);
                    $message = 'Solicitud enviada a la administración de la iglesia.';

                    echo "<SCRIPT type='text/javascript'> //not showing me this
                            alert('$message');
                            window.location.replace(\"index.php\");
                        </SCRIPT>";
                       }
                       else{
                            echo "<SCRIPT type='text/javascript'> //not showing me this
                            alert('$error_encontrado');
                        </SCRIPT>";
                       }
                      }
                      else{
                        $message = 'La contraseña no coincide con la confirmación';

                    echo "<SCRIPT type='text/javascript'> //not showing me this
                            alert('$message');
                        </SCRIPT>";
                      }
                          
                       
                }
                        
                    
        mysqli_close($conn);                       

function validar_clave($clave,&$error_clave){
   if(strlen($clave) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;
} 

function validar_cedula($cedula,&$error_cedula){
   if(strlen($cedula) < 6){
      $error_cedula = "Por favor ingrese una cédula válida";
      return false;
   }
   $error_cedula = "";
   return true;
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

    <!-- Login form -->
            <div>
            <form action="registromiembro.php" method="POST">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Solicitud de membresía</h4>
                  </div>
                  <div class="modal-body mx-3">

                    <div class="md-form mb-4">
                      <input type="text" id="cedula" name="cedula" class="form-control validate" placeholder="Número de Cédula" value="<?php echo $cedula;?>">
                    </div>

                    <div class="md-form mb-4">
                      <input type="text" id="nombre" name="nombre" class="form-control validate" placeholder="Nombre" value="<?php echo $nombre;?>">
                    </div>

                    <div class="md-form mb-4">
                      <input type="text" id="apellido1" name="apellido1" class="form-control validate" placeholder="Primer Apellido" value="<?php echo $apellido1;?>">
                    </div>

                    <div class="md-form mb-4">
                      <input type="text" id="apellido2" name="apellido2" class="form-control validate" placeholder="Segundo Apellido" value="<?php echo $apellido2;?>">
                    </div>

                    <div class="md-form mb-4">
                        <h5>Género</h5>
                        <?php 
                        if ($genero=='M') {
                            echo'<input type="radio" id="genero" name="genero" value="M" class="form-control" checked=""><p>Masculino</p>
                            <input type="radio" id="genero" name="genero" value="F" class="form-control"><p>Femenino</p>';
                        }
                        else{
                            if ($genero=='F') {
                            echo'<input type="radio" id="genero" name="genero" value="M" class="form-control"><p>Masculino</p>
                            <input type="radio" id="genero" name="genero" value="F" class="form-control" checked=""><p>Femenino</p>';
                            }
                            else{
                                echo'<input type="radio" id="genero" name="genero" value="M" class="form-control"><p>Masculino</p>
                            <input type="radio" id="genero" name="genero" value="F" class="form-control"><p>Femenino</p>';
                            }
                        }
                        ?>
                            
                    </div>

                    <div class="md-form mb-4">
                      <input type="text" id="telefono1" name="telefono1" class="form-control validate" placeholder="Teléfono 1" value="<?php echo $telefono1;?>">
                    </div>

                    <div class="md-form mb-4">
                      <input type="text" id="telefono2" name="telefono2" class="form-control validate" placeholder="Teléfono 2" value="<?php echo $telefono2;?>">
                    </div>

                    <div class="md-form mb-4">
                      <input type="email" id="email" name="email" class="form-control validate" placeholder="Email" value="<?php echo $email;?>">
                    </div>

                    <div class="md-form mb-4">
                      <input type="password" id="contrasena" name="contrasena" class="form-control validate" placeholder="Contraseña">
                    </div>
                    <div class="md-form mb-4">
                      <input type="password" id="confcontrasena" name="confcontrasena" class="form-control validate" placeholder="Confirmar contraseña">
                    </div>

                    <div class="md-form mb-4">
                      <input type="text" id="direccion" name="direccion" class="form-control validate" placeholder="Dirección" value="<?php echo $direccion;?>">
                    </div>

                    <div class="md-form mb-4">
                        <h5>Fecha de Nacimiento</h5>
                      <input type="Date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control validate" max=
                         <?php
                             echo date("Y-m-d", strtotime( '-1 days' ) );
                         ?>
                          placeholder="Fecha de Nacimiento" value="<?php echo $fecha_nacimiento;?>">
                    </div>

                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" name="enviar" value="Enviar" class="btn crose-btn header-btn"></button>
                  </div>
                </div>
              </div>
              </form>
            </div>
            <!-- form end-->


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