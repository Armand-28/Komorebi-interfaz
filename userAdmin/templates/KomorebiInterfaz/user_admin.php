<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="../login/main.css" />
  </head>
  <body>
    <div class="container">
      <div class="login">
        <img src="../imagenes/login.jpg" alt="" />
        <div class="formulario">
          <p>
            <a href="../index/index.html"
              ><img src="../imagenes/logo rojo.png" alt=""
            /></a>
          </p>
          <h1>Iniciar Sesión</h1>
          <p><b>Todos tus productos en un solo lugar</b></p>
          <p>
            <span></span><small>Inicia sesion con correo</small><span></span>
          </p>
          <form action="" method="post">
            <label for="">Correo electrónico</label>
            <input
              type="email"
              name=""
              id=""
              class="input1"
              placeholder="Ingrese su Correo"
            />
            <label for="">Contraseña</label>
            <input
              type="password"
              name=""
              id=""
              class="input2"
              placeholder="Ingrese su Contraseña"
            />
            <p>
              <a href="#" class="olvidar-contraseña">¿Olvido su Contraseña?</a>
            </p>
            <button type="submit">
              <a href="../configuracion de cuenta/configuracionAdmin.html"
                >Acceder</a
              >
            </button>
          </form>
          <p>
            ¿No te encuentras registrado?
            <a href="../login/login2.html">Crear cuenta</a>
          </p>
        </div>
      </div>
      <p class="forma1"></p>
      <p class="forma2"></p>
      <div class="verificar" id="verificar">
        <div class="header-titulo">
          <h3>Digita tu Correo</h3>
        </div>
        <p>
          Se enviara un enlace para el restablecimiento de la contraseña al
          correo ingresado.
        </p>
        <div>
          <i class="fa-solid fa-user-secret"></i>
          <input type="email" id="" name="" placeholder="Verifica tu correo" />
          <button type="submit" class="btn-verificar" id="btn-verificar">
            <a href="#">Enviar</a>
          </button>
        </div>
      </div>
      <div class="carritoCompras" id="pedidos">
        <div class="contenido">
          <i class="fa-solid fa-circle-xmark"></i>
          <p>Su solicitud ha sido registrada. 
            El enlace de restablecimiento de contraseña
             llegara en los proximos minutos.</p>
          <button><a href="../login/login.html">Cerrar</a></button>
        </div>
      </div>
      
      <!-- verificar -->

      <div class="verificar" id="verificar">
        <div class="header-titulo">
          <h3>Verifica tu correo electronico</h3>
        </div>
        <p>Si no tienes cuenta, escribe un correo electronico por donde <br> podemos contactarnos contigo</p>
        <div>
          <i class="fa-solid fa-user-secret"></i>
          <input type="email" id="" name=""  placeholder="Verifica tu correo">
          <button type="submit" class="btn-verificar" id="btn-verificar"><a href="#">Enviar</a></button>
        </div>
    </div>

    </div><!-- container -->

    <script src="../login/main.js"></script>
    <script
      src="https://kit.fontawesome.com/72ac7502a0.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
