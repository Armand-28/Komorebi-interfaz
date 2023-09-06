<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Mi Plaza Autoservicio</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lcb9nknAAAAAJ8aouGGquPrx5H9qw-c7XFAABQK"></script>
</head>

<body>
    <div class="container">
        <div id="login"></div>
        <div class="row justify-content-center align-items-center min-vh-100">
            <div id="login-box" class="col-12 col-md-8 col-lg-6">
                <h2 class="text-center">Mi Plaza Autoservicio</h2>
                <p class="text-center">Ingrese su usuario y contraseña para iniciar sesión</p>
                <div id="alert">
                </div>
                <form class="row g-3 needs-validation" novalidate id="loginForm" name="loginData" action="validar.php" method="POST">
                    <div class="form-group">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button data-sitekey="6Lcb9nknAAAAAGF7kYkpuYU_9nfpA1j8rM1rq8bd" type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
                <br>

                <p class="text-center">¿Olvidaste tu contraseña? <a href="../../../index/index.php">regresar al inicio</a></p>
            </div>
        </div>
    </div>
    <script src="../../js/login.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lcb9nknAAAAAGF7kYkpuYU_9nfpA1j8rM1rq8bd"></script>
</body>

</html>