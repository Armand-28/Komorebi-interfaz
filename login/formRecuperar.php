<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperar contraseña | autoservicio</title>
    <link rel="stylesheet" href="../login/assets/css/style.css">
    <script src="https://kit.fontawesome.com/a8bf13818c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        include_once('../index/header.php');
    ?>
   <div class="form-container">
    <form class="form" action="codigo.php" method="post">
        <p class="form-title">recuperacion de la contraseña</p>
        <p class="otpSubheading">Enviaremos un correo de verificación para cambiar la contraseña</p>
        <div class="input-container">
            <input placeholder="ingrese su correo aquí..." name="email" type="email">
        </div>
        <input class="submit" type="submit" name="ctEnviar" value="Enviar">
    </form>
</div>

    <?php
        include_once('../index/footer.php');
    ?>
</body>
</html>