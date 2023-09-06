<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Configuración</title>
    <link rel="stylesheet" href="../configuracion de cuenta/main.css" />
  </head>
  <body>
    <div class="container">
      <!-- Header 1 de la pagina-->
      <header>
        <p><i class="fa-sharp fa-solid fa-phone"></i></p>
        <p><i class="fa-solid fa-user"></i></p>
        <p><i class="fa-solid fa-message"></i></p>
      </header>
      <!-- header 2 de la pagina  -->
      <header class="navegacion">
        <p class="seguir">
          <i class="fa-solid fa-chevron-left"></i>Seguir Comprando
        </p>
        <p>
          <a href="../index/index.html"
            ><img src="../imagenes/miplaza.png" alt=""
          /></a>
        </p>
        <input type="search" placeholder="¿Que buscas hoy?" /><span
          ><i class="fa-solid fa-magnifying-glass"></i
        ></span>
        <p class="carro"><i class="fa-solid fa-cart-shopping"></i></p>
        <p>
          <li class="li-1"><a href="">Mi carrito</a></li>
        </p>
        <p class="cuenta">
          <a href="../login/login.html"
            ><i class="fa-solid fa-circle-user"></i
          ></a>
        </p>
        <li class="li-2"><a href="#">Mi cuenta</a></li>
        <div>
          <p class="modoentrega">
            <i class="fa-sharp fa-solid fa-shop"></i
            ><a href="#">Modo de entrega</a>
          </p>
          <p class="quienessomos">
            <a href="../nosotros/nosotros.html"
              ><i class="fa-solid fa-store"></i> ¿Quienes somos?</a
            >
          </p>
        </div>
      </header>
      <div class="container2">
        <aside>
          <p><i class="fa-solid fa-circle-user"></i></p>
          <p>Armando p</p>
          <p>Name user</p>
          <ul>
            <li  onclick="transition(1)"   class="perfil">
            <a href="controlador/config.controller.php">Perfil</a></li>
            <li  onclick="transition(2)" class="carrito-compras">Carrito de compras</li>
            <li  onclick="transition(3)" class="direcciones">direcciones</li>
            <li  onclick="transition(4)" class="pedidos">pedidos</li>
            <a href="../index/index.php?logout=1">Salir</a>
          </ul>
        </aside>
        <!-- perfil -->
        <section id="perfil">
          <form action="../recibir.php" method="post">
            <label for=""
              >Nombres:
              <input
                type="text"
                name="cliname"
                id=""
                placeholder="Ingrese sus nombres completos"
              />
            </label>
            <label for=""
              >Género:
              <select name="cligenero" id="">
                <option value="">Seleecione su género</option>
                <option value="">Masculino</option>
                <option value="">Femenino</option>
                <option value="">Otro</option>
              </select>
            </label>
            <label for=""
              >Correo electronico:
              <input type="email" name="cliemail" id="" />
            </label>

            <label for=""
              >Contraseña:
              <input
                type="text"
                name="clicontra"
                id="contraseña"
                placeholder="Ingresa tu contraseña"
              />
            </label>
            
            <label for=""
              >Número de Telefono:
              <input
                type="text"
                name="clinumcell"
                id=""
                placeholder="Ingrese su Apellido"
              />
            </label>
            <label for=""
              >Fecha de Nacimiento:
              <input type="date" name="clifecnac" id="" />
            </label>
            <button type="submit"><a href="">Guardar</a></button>
          </form>
        </section>
        <!-- carrito de compras -->
        <div class="carritoCompras" id="carritoCompras">
          <div class="contenido">
            <i class="fa-solid fa-circle-xmark"></i>
            <p>No se han selecionado productos</p>
            <button>
              <a href="../productos/productos.html">Selecionar productos</a>
            </button>
          </div>
        </div>

        <!-- direcciones -->

        <div class="carritoCompras" id="direccion">
          <div class="contenido">
            <i class="fa-solid fa-circle-xmark"></i>
            <p>No existen direcciones registradas</p>
            <button>
              <a href="../productos/productos.html">Agregar dirección</a>
            </button>
          </div>
        </div>
        <div class="carritoCompras" id="pedidos">
          <div class="contenido">
            <i class="fa-solid fa-circle-xmark"></i>
            <p>No hay pedidos registrados</p>
            <button>
              <a href="../productos/productos.html">Agregar dirección</a>
            </button>
          </div>
        </div>
      </div>
      <footer>
        <button>
          <i class="fa-regular fa-question"></i>
          <div class="emerguente" id="abrir-boton-ayuda">
            <i class="fa-solid fa-circle-xmark" id="cerrar"></i>
            <p class="ayuda">
              <a href=""><i class="fa-solid fa-headphones"></i>01-8000-9999</a>
            </p>
            <p class="ayuda2">
              <a href=""
                ><i class="fa-solid fa-envelope"></i>PlazaAs2023@gmail.com</a>
            </p>
          </div>
        </button>
      </footer>
      <!--Modo de entrega-->
      <div class="modo-entrega" id="modo-entrega">
        <div class="header-titulo">
          <h2>¿Como desea recibir su pedido?</h2>
          <i class="fa-solid fa-circle-xmark cerrar-modo-entrega"></i>
        </div>
        <div class="opc-modo-entrega">
          <div class="recoger-tienda">
            <img src="../imagenes/recoger tienda.png" alt="">
            <p>Recojer tienda</p>
          </div>
          <div class="recoger-domicilio">
            <img src="../imagenes/recoger-domicilio.jpg" alt="">
            <p>Recojer domicilio</p>
          </div>
        </div>
      </div>
      <!-- verficar correo para el metodo de entrega -->
      <div class="verificar" id="verificar">
        <div class="header-titulo">
          <h3>Verifica tu correo electronico</h3>
        </div>
        <p>Si no tienes cuenta, escribe un correo electronico por donde <br> podemos contactarnos contigo</p>
        <div>
          <i class="fa-solid fa-user-secret"></i>
          <input type="email" id="" name=""  placeholder="Verifica tu correo">
          <button type="submit" class="btn-verificar" id="btn-verificar"><a href="#">Siguiente</a></button>
        </div>
      </div>
    <!-- Segir comprando -->
      <div class="cuadro-seguir" id="cuadro-seguir">
        <i class="fa-regular fa-circle-check"></i>
        <div class="seguir-comprando">
          <h3>Tus preferencias han sido guardadas exitosamente</h3>
        </div>
        <div>
          <button type="submit" class="btn-seguir"><a href="index.html">Seguir Comprando</a></button>
        </div>
      </div>
      <!-- donde te encuentras -->
      <div class="donde-encuentras" id="donde-encuentras">
        <div class="header-titulo">
          <h3>¿Donde te encuentras?</h3>
        </div>
        <div class="contenido">
          <p>Recuerda que manejamos el servicio de domicilio solamente dentro del municipio</p>
          <form action="" class="formulario-dir">
            <label for="" class="barrio">Barrio
              <input type="text" name="" id="" placeholder="Ingrese el nombre de su barrio" >
            </label>
            <label for="" class="direccion">Dirección
              <select name="" id="">Carrera
                <option value="">Seleccione</option>
                <option value="">Calle</option>
                <option value="">Carrera</option>
                <option value="">Avenidad</option>
              </select>
              <input type="number" class="calle">
              <span>#</span>
              <input type="text">
              <input type="number" class="num2">
              <input type="number">
            </label>
            <label for="" class="textarea">Descripción
              <textarea name="" id=""  cols="30" rows="5" placeholder="Escribe tu comentario"></textarea>
            </label>
          </form>
          <button class="btn-guardar" id="btn-guardar"><a href="#">Guardar</a></button>
        </div>
      </div>
      </div>
    </div>
    <!-- Script -->
    <script src="../configuracion de cuenta/main.js"></script>
    <script
      src="https://kit.fontawesome.com/72ac7502a0.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>
