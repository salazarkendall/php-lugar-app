<?php
session_start();
require 'conexion.php';
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];


$query = "SELECT COUNT(*) as contar FROM persona where email = '$email' and contrasena = '$contrasena' and id_permiso = 1 ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
	if ($contrasena=='ellugar123') {
		header("location: ../cambiocontrasena.php?email=$email");
	}
	else{
		$_SESSION['username'] = $email;
   		header("location: ../inicio-admin.php");
	}
}else {
	$message = 'Por favor verifique que haya ingresado sus datos correctamente y que posea permisos de administrador';

    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"../index.php\");
    </SCRIPT>";
}

?>