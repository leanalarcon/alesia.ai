<?php
$name = $_POST['nombre'];
$email = $_POST['email'];
$textArea = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$textArea = "Este mensaje fue enviado por " . $name . ",\r\n";
$textArea .= "Su e-mail es: " . $email . " \r\n";
$textArea .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$textArea .= "Enviado el " . date('d/m/Y', time());

$para = 'alarconleandro.n@gmail.com';
$asunto = 'Mensaje de Alesia';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>