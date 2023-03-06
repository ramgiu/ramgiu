<?php
  $name = $_POST["contactFname"];
  $lname = $_POST["contactLname"];
  $email = $_POST["contactEmail"];
  $csubject = $_POST["contactSubject"];
  $message = $_POST["contactMessage"];

  // Construir el mensaje del correo electrónico
  $to = "rami_200_2@hotmail.com";
  $subject = "Nuevo mensaje del formulario";
  $body = "Nombre: $name\nApellido: $lname\nEmail: $email\nAsunto: $csubject\nMensaje: $message";

  // Enviar el correo electrónico
  mail($to, $subject, $body);
?>