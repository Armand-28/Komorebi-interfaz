<?php
// Verificar si el formulario ha sido enviado
include('conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el código de verificación ingresado por el usuario
    $codigo_ingresado = $_POST["codigo"];

    // Aquí deberías tener en cuenta cómo estás almacenando el código de verificación para cada usuario.
    // Puede ser en una tabla de la base de datos asociada al correo o en una variable de sesión, por ejemplo.

    // Comprobar si el código ingresado coincide con el código de verificación almacenado
    if ($codigo_ingresado === $codigo_verificacion_almacenado) { // $codigo_verificacion_almacenado es el código obtenido al enviar el correo de verificación

        // Si el código coincide, permitir al usuario cambiar su contraseña
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el correo electrónico ingresado por el usuario
            $email = $_POST["email"];

            // Aquí deberías verificar si el correo existe en tu base de datos o sistema
            // y obtener la información del usuario (por ejemplo, su ID de usuario) para poder actualizar la contraseña.

            // Ejemplo de cómo actualizar la contraseña en la base de datos (debes adaptarlo según tu sistema de almacenamiento)
            $nueva_contrasena = $_POST["nueva_contrasena"];
            $usuario_id = obtenerIdUsuarioPorCorreo($email);
            actualizarContrasena($usuario_id, $nueva_contrasena);

            // A continuación, puedes redirigir al usuario a una página de éxito o a la página de inicio de sesión.
            header("Location: cambio_exitoso.php");
            exit();
        }
    } else {
        // Si el código no coincide, mostrar un mensaje de error o redirigir a otra página de error.
        header("Location: error_codigo_verificacion.php");
        exit();
    }
}
?>
