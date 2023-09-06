<?php

require "../PHPMailer/src/PHPMailer.php";
require "../PHPMailer/src/SMTP.php";
require "../PHPMailer/src/Exception.php"; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_POST['ctEnviar']){
    $longitud = 4; 
    $caracteres = '0123456789';
    $codigo = '';
    for ($i = 0; $i < $longitud; $i++) {
        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    if(!empty($codigo)){
        $email = $_POST['email']; 
        $mail = new PHPMailer();

        // Configurar el servidor de correo
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Reemplaza con el nombre o dirección IP de tu servidor SMTP
        $mail->Port = 587; // Puerto del servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'supermarketmiplaza@gmail.com'; // Tu correo de autenticación SMTP
        $mail->Password = 'fwiitigvotjvcecc'; // Tu contraseña de autenticación SMTP

        // Configurar el correo
        $mail->setFrom('supermarketmiplaza@gmail.com', 'Mi plaza Autoservicio'); // Tu dirección de correo y nombre remitente
        $mail->addAddress($email); // Agregar el correo del destinatario
        $mail->Subject = 'Verificacion de cambio de contrasen
        
        a';
        $mail->Body = 'Su código de verificación es: ' . $codigo;

        // Enviar el correo
        if ($mail->send()) {
            header("Location: formVerificacion.php");
            sleep(300);

        } else {
            echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
        }
    }else{
        echo "no esta el codigo";
    }
}else{
    echo "no esta enviar"; 
}



