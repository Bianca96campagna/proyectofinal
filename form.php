<?php

$nombre = $_post ["nombre"];
$email = $_post ["email"];
$mensaje = $_post ["textarea"];

$para = "montearomas@gmail.com";
$asunto= "Este mensaje fue enviado desde la web."

mail($para, $asunto, utf8_decode($nombre, $mail, $mensaje));

header ("Location:index.html");

?>
