<?php

// Obtiene los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];

// Crea el mensaje del correo electrónico
$mensaje = "Nombre: $nombre\n";
$mensaje .= "Apellido: $apellido\n";
$mensaje .= "Teléfono: $telefono\n";
$mensaje .= "Correo electrónico: $email\n";
$mensaje .= "Dirección: $direccion\n";

// Envía el correo electrónico
$headers = 'From: ' . $email . '\r\n';
mail('brianmlara@outlook.com', 'Formulario de contacto', $mensaje, $headers);

// Redirecciona al usuario a la página de agradecimiento
header('Location: agradecimiento.html');

?>
