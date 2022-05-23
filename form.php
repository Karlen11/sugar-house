<?php

$nombre = $_POST["name"]
$mail = $_POST["email"]
$mensaje = $_POST["textarea"]

$mensaje = "Mensaje enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $mail . ",\r\n";
$mensaje .= "el asunto es: " . $asunto . ",\r\n";
$mensaje .= "Enviado el " . date("d/m/y", time());

?>

$para = "thesugarshouse.ar@gmail.com";
$asunto = "enviado desde web sugars house"

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:exito.html");
