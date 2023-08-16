<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-login.css">
</head>
<body>
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="?a=login&b=validarFormulario" class="formulario__login" method="post" id="form">
                        <a href="?a=index"><img src="assets/imagenes/logo rojo.png" alt="Iniciar Sección"></a>
                        <input type="text" name="user" placeholder="Correo Electronico" required>
                        <input type="password" name="pass" placeholder="Contraseña" required>
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="../controller/vform.php" class="formulario__register" method="post">
                        <h2>Regístrarse</h2>
                        <input type="text" name="ctNombre" id="name" placeholder="Nombre completo">
                        <input type="email" name="ctEmail" id="email" placeholder="Correo Electronico">
                        <input type="number" name="ctTel" id="tel" placeholder="Numero de Telefono">
                        <input type="date" name="ctFNac" id="fechaNacimiento" placeholder="Fecha de nacimiento">
                        <select name="selGen" class="form-select" id="genero" aria-label="Default select example">
                            <option selected >Género</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option> 
                          </select>
                        <input type="text" name="ctUser" id="user" placeholder="Usuario">
                        <input type="password" name="ctPass" id="password" placeholder="Contraseña">
                        <input type="password" name="ctPass" id="password" placeholder="Confirmar Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/indexHelper.js"></script>
        <script src="https://kit.fontawesome.com/7cc00942f2.js" crossorigin="anonymous"></script>
</body>
</html>