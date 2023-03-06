<?php
  $name = $_POST["contactFname"];
  $lname = $_POST["contactLname"]
  $email = $_POST["contactEmail"];
  $csubject = $_POST["contactSubject"];
  $message = $_POST["contactMessage"];

  // Construir el mensaje del correo electrónico
  $to = "ramiro.giunta@gmail.com";
  $subject = "Nuevo mensaje del formulario";
  $body = "Nombre: $name\nEmail: $email\nMensaje: $message";

  // Enviar el correo electrónico
  mail($to, $subject, $body)
?>