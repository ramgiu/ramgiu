<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$salto = "\r\n";

$destino1 = $email;
$asunto1 = "Respuesta a su consulta vía web";
$mensaje1 = "Estimado ".$nombre." esta es una respuesta automática a la consulta que ud. realizara en nuestra página web, a la brevedad será analizada y nos pondremos en contacto.";
$remite1 = "From: The Bolt <rami_200_2@hotmail.com>";

mail($destino1, $asunto1, $mensaje1, $remite1);

$destino2 = "rami_200_2@hotmail.com";
$asunto2 = $nombre.", te ha enviado un mensaje.";
$mensaje2 = "Nombre: ".$nombre.$salto."Email: ".$email.$salto."Mensaje: ".$mensaje;
$remite2 = "From: $nombre <$email>";

mail($destino2, $asunto2, $mensaje2, $remite2);

?>