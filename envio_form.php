<?php
   $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
    //Obtenemos valores input formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['Alguien acaba de completar un formulario'];   
    $mensaje = $_POST['message'];
    $para = 'bs.catalawu@gmail.com';

    //Creamos cabecera.
    $headers = 'From' . " " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";

    //Componemos cuerpo correo.
    $msjCorreo = "Nombre: " . $nombre;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Email: " . $email;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Asunto: " . $subject;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Mensaje: " . $mensaje;
    $msjCorreo .= "\r\n";

  if (mail($para, $subject, $msjCorreo, $headers)) {
       echo "<script language='javascript'>
          alert('Mensaje enviado, muchas gracias.');
       </script>";
  } else {
       echo "<script language='javascript'>
          alert('fallado');
       </script>";
  }
}
?>





