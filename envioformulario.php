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

if (mail('brianmlara@outlook.com', 'Formulario de contacto', $mensaje, $headers)) {
    // El correo se envió con éxito, muestra un mensaje en la misma página
    echo "Correo enviado con éxito. ¡Muchas gracias por tu consulta!";
} else {
    // Hubo un error al enviar el correo, muestra un mensaje de error
    echo "Hubo un error al enviar el correo. Por favor, inténtalo de nuevo más tarde.";
}

?>
