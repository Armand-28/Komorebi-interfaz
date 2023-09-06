<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../login/assets/css/styles.css">
</head>

<body>
    <form class="otp-Form" action="confirmar.php" method="post">
        <span class="mainHeading">Verificación</span>
        <p class="otpSubheading">Hemos enviado un código de verificación a tu correo</p>
        <div class="inputContainer">
            <input placeholder="ingresa el código aqui..." class="input" name="email" type="email">
        </div>
        <button class="verifyButton" type="submit">Verificar</button>
        <button class="exitBtn">×</button>
        <p class="resendNote">¿No recibiste el código? <button class="resendBtn">Reenviar Código</button></p>
    </form>
</body>

</html>