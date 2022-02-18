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
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea eliminar el usuario?') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&cedula=$cedula\");
              return true;
            } else {
             window.location.replace(\"mantenimiento-miembros.php\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  case 'mensaje':
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea eliminar el mensaje?') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&id_mensaje=$id_mensaje\");
              return true;
            } else {
             window.location.replace(\"mantenimiento-mensajes.php\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  case 'anuncio':
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea eliminar el anuncio?') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&id_anuncio=$id_anuncio\");
              return true;
            } else {
             window.location.replace(\"mantenimiento-anuncios.php\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  case 'evento':
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea eliminar el evento?') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&id_evento=$id_evento\");
              return true;
            } else {
             window.location.replace(\"mantenimiento-agenda.php\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  case 'ministerio':
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea eliminar el ministerio?') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&id_ministerio=$id_ministerio\");
              return true;
            } else {
             window.location.replace(\"mantenimiento-ministerios.php\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  case 'reportemin':
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea eliminar el reporte de ministerio?') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&id_reporte_ministerio=$id_reporte_ministerio\");
              return true;
            } else {
             window.location.replace(\"mantenimiento-reportemin.php\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  case 'interesado':
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea eliminar la persona interesada?') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&id_interesado=$id_interesado\");
              return true;
            } else {
             window.location.replace(\"reportes-personasinteresadas.php\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  case 'miperfil':
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea cerrar su cuenta? Esta acción no podrá ser deshecha.') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&emailEliminar=$emailEliminar\");
              return true;
            } else {
             window.location.replace(\"ayuda-editarperfil.php?email=$emailEliminar\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  case 'activo':
  echo "<SCRIPT type='text/javascript'> //not showing me this
    
        function confirmacion() {
            if (confirm('¿Seguro que desea eliminar el activo? Esta acción no podrá ser deshecha.') == true) {
             window.location.replace(\"eliminar.php?tabla=$tabla&id_activo=$id_activo\");
              return true;
            } else {
             window.location.replace(\"financiero-activo.php\");
              return false;
            }
          }
          confirmacion();
      </SCRIPT>";
  break;

  default:
  echo "<SCRIPT type='text/javascript'> //not showing me this
         window.location.replace(\"inicio-admin.php\");
</SCRIPT>";
}
  

 ?>