<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono']; 
$mensaje = $_POST['mensaje'];

$destinatario = "fredymoz@gmail.com";
$asunto = "Contacto desde la web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

mail($destinatario, $asunto, $carta)


?>