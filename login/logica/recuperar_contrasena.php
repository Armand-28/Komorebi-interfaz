<?php

use PHPMailer\PHPMailer\PHPMailer;
// Verificar si el formulario ha sido enviado
include('conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el correo electrónico ingresado por el usuario
    $email = $_POST["email"];

    // Aquí deberías verificar si el correo existe en tu base de datos o sistema
    // Si el correo existe, proceder con la generación del código de verificación o enlace único y enviarlo por correo electrónico

    // Verificar si el formulario ha sido enviado
    include('conexion.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el correo electrónico ingresado por el usuario
        $email = $_POST["email"];

        // Verificar si el correo existe en la tabla "clientes"
        $query = "SELECT * FROM clientes WHERE email = '$email'";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            // Si el correo existe en la base de datos, proceder con la generación del código de verificación
            // Generar un código de verificación (puedes usar alguna función de generación de códigos aleatorios)
            $codigo_verificacion = generarCodigoAleatorio(4);

            // Enviar el correo con el código de verificación al usuario
            enviarCorreoVerificacion($email, $codigo_verificacion);
        } else {
            // Si el correo no existe en la base de datos, mostrar un mensaje de error o realizar alguna otra acción
            echo 'El correo ingresado no existe en la base de datos';
        }
    }

}

// Función para generar un código aleatorio
function generarCodigoAleatorio($longitud)
{
    $caracteres = '0123456789';
    $codigo = '';
    for ($i = 0; $i < $longitud; $i++) {
        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $codigo;
}

// Función para enviar el correo de verificación
function enviarCorreoVerificacion($email, $codigo)
{
    // Instanciar el objeto de PHPMailer
    $mail = new PHPMailer();

    // Configurar el servidor de correo
    $mail->isSMTP();
    $mail->Host = 'servidor_smtp'; // Reemplaza con el nombre o dirección IP de tu servidor SMTP
    $mail->Port = 587; // Puerto del servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'supermarketmiplaza@gmail.com'; // Tu correo de autenticación SMTP
    $mail->Password = 'fwiitigvotjvcecc'; // Tu contraseña de autenticación SMTP

    // Configurar el correo
    $mail->setFrom('supermarketmiplaza@gmail.com', 'jhojan campo'); // Tu dirección de correo y nombre remitente
    $mail->addAddress($email); // Agregar el correo del destinatario
    $mail->Subject = 'Verificación de cambio de contraseña';
    $mail->Body = 'Su código de verificación es: ' . $codigo;

    // Enviar el correo
    if ($mail->send()) {
        echo 'Correo enviado correctamente';
    } else {
        echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
    }
}
