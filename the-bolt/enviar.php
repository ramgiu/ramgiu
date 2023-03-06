<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
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
  if (mail($to, $subject, $body)) {
    echo "El mensaje se ha enviado correctamente.";
  } else {
    echo "Hubo un error al enviar el mensaje.";
  }
}
?>