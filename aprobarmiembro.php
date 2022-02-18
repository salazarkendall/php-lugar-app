<?php

$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'IglesiaElLugar');

require 'logica/conexion.php';
$cedula = $_GET['cedula'];

$query = "Update persona set id_permiso=2 where cedula='$cedula'";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);
$message = 'El usuario se ha añadido a la lista de membresía';

echo "<SCRIPT type='text/javascript'> //not showing me this
		alert('$message');
window.location.replace(\"seguridad-aprobarmiembros.php\");
</SCRIPT>";
// }
 ?>