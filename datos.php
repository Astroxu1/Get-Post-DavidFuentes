<?php
if ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
  $ nombre = $ _POST [" txtNombre "];
  $ correo = $ _POST [" txtEmail "];
  $ telefono = $ _POST [" txtTelefono "];
  $ sitio_web = $ _POST [" txtSitioWeb "];
  $ asunto = $ _POST [" txtAsunto "];
  $ mensaje = $ _POST [" txtMensaje "];

  /*$nombre = $_GET["txtNombre"];
  $email = $_GET["txtEmail"];
  $telefono = $_GET["txtTelefono"];
  $sitio_web = $_GET["txtSitioWeb"];
  $asunto = $_GET["txtAsunto"];
  $mensaje = $_GET["txtMensaje"];*/

  echo " Los datos se han guardado correctamente:<br> ";
  echo " Nombre: " . $ nombre . " <br> ";
  echo " Correo electrónico: " . $ correo electrónico . " <br> ";
  echo " Teléfono: " . $ teléfono . " <br> ";
  echo " SitioWeb: " . $ sitio_web . " <br> ";
  echo " Asunto: " . $ asunto . " <br> ";
  echo " Mensaje: ". $ mensaje . " <br> ";
}
?>