<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$celular = $_POST['celular'];
$mensaje = $_POST['mensaje'];

$destinatario = "montesPaola23@gmail.com";
$asunto = "Nuevo mensaje del formulario de contacto";

$cuerpo = "Ha recibido un mensaje de: $nombre\n\n";
$cuerpo .= "Datos enviados:\n";
$cuerpo .= "Email: $email\n";
$cuerpo .= "Teléfono: $telefono\n";
$cuerpo .= "Ciudad: $ciudad\n";
$cuerpo .= "Celular: $celular\n";
$cuerpo .= "Mensaje: $mensaje\n";

$cabeceras = "From: $email\r\n" .
             "Reply-To: $email\r\n" .
             "X-Mailer: PHP/" . phpversion();

if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    echo "Su mensaje ha sido enviado<br><a href='contacto.html'>Volver</a>";
} else {
    echo "Su mensaje no pudo ser enviado<br><a href='contacto.html'>Volver</a>";
}
?>
