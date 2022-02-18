<?php
require 'logica/conexion.php';
$cedula = $_GET['cedula'];
$tabla = $_GET['tabla'];
$id_mensaje = $_GET['id_mensaje'];
$id_anuncio = $_GET['id_anuncio'];
$id_evento = $_GET['id_evento'];
$id_ministerio = $_GET['id_ministerio'];
$id_reporte_ministerio = $_GET['id_reporte_ministerio'];
$id_interesado = $_GET['id_interesado'];
$emailEliminar=$_GET['emailEliminar'];
$id_activo = $_GET['id_activo'];

switch ($tabla) {

	case 'persona':
		$query = "delete from persona where cedula='$cedula'";
		$bdconect = mysqli_query($conectar,$query);
		$parametros = mysqli_fetch_array($bdconect);
		$message = 'Eliminado correctamente';

		echo "<SCRIPT type='text/javascript'> //not showing me this
				alert('$message');
		window.location.replace(\"mantenimiento-miembros.php\");
		</SCRIPT>";
		break;

	case 'mensaje':
			$query = "delete from mensaje where id_mensaje='$id_mensaje'";
			$bdconect = mysqli_query($conectar,$query);
			$parametros = mysqli_fetch_array($bdconect);
			$message = 'Eliminado correctamente';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
			window.location.replace(\"mantenimiento-mensajes.php\");
			</SCRIPT>";
			break;

	case 'anuncio':
			$query = "delete from anuncio where id_anuncio='$id_anuncio'";
			$bdconect = mysqli_query($conectar,$query);
			$parametros = mysqli_fetch_array($bdconect);
			$message = 'Eliminado correctamente';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
			window.location.replace(\"mantenimiento-anuncios.php\");
			</SCRIPT>";
			break;

	case 'evento':
			$query = "delete from evento where id_evento='$id_evento'";
			$bdconect = mysqli_query($conectar,$query);
			$parametros = mysqli_fetch_array($bdconect);
			$message = 'Eliminado correctamente';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
			window.location.replace(\"mantenimiento-agenda.php\");
			</SCRIPT>";
			break;

	case 'ministerio':
			$query = "delete from ministerio where id_ministerio='$id_ministerio'";
			$bdconect = mysqli_query($conectar,$query);
			$parametros = mysqli_fetch_array($bdconect);
			$message = 'Eliminado correctamente';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
			window.location.replace(\"mantenimiento-ministerios.php\");
			</SCRIPT>";
			break;

	case 'reportemin':
			$query = "delete from reporte_ministerio where id_reporte_ministerio='$id_reporte_ministerio'";
			$bdconect = mysqli_query($conectar,$query);
			$parametros = mysqli_fetch_array($bdconect);
			$message = 'Eliminado correctamente';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
			window.location.replace(\"mantenimiento-reportemin.php\");
			</SCRIPT>";
			break;

	case 'interesado':
			$query = "delete from interesado where id='$id_interesado'";
			$bdconect = mysqli_query($conectar,$query);
			$parametros = mysqli_fetch_array($bdconect);
			$message = 'Eliminado correctamente';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
			window.location.replace(\"reportes-personasinteresadas.php\");
			</SCRIPT>";
			break;

	case 'miperfil':
			$query = "delete from persona where email='$emailEliminar'";
			$bdconect = mysqli_query($conectar,$query);
			$parametros = mysqli_fetch_array($bdconect);
			$message = 'Cuenta inhabilitada';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
			window.location.replace(\"index.php\");
			</SCRIPT>";
			break;

	case 'activo':
			$query = "delete from activo where id_activo='$id_activo'";
			$bdconect = mysqli_query($conectar,$query);
			$parametros = mysqli_fetch_array($bdconect);
			$message = 'Eliminado correctamente';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
			window.location.replace(\"financiero-activo.php\");
			</SCRIPT>";
			break;

	default:
		  echo "<SCRIPT type='text/javascript'> //not showing me this
		         window.location.replace(\"inicio-admin.php\");
				</SCRIPT>";
}

 ?>