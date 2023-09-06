<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Komorebi</title>
  <link rel="stylesheet" href="../index/css/main.css">
  <script src="https://kit.fontawesome.com/96f9a4100d.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">
    <!-- Header 1 de la pagina-->
    <?php
    require_once('header.php');
    ?>
    <!-- estructura para hacer un carrusel de imagenes -->
    <div class="slider">
      <div class="list">
        <div class="items">
          <img src="../imagenes/carrucel2.jpg" alt="">
        </div>
        <div class="items">
          <img src="../imagenes/carrucel3.jpg" alt="">
        </div>
        <div class="items">
          <img src="../imagenes/carrusel.jpg" alt="">
        </div>
        <div class="items">
          <img src="../imagenes/img1.png" alt="">
        </div>
        <div class="items">
          <img src="../imagenes/footer.jpg" alt="">
        </div>
      </div>
      <div class="buttons">
        <button id="prev"> < </button>
        <button id="next"> > </button>
      </div>
      <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <!-- final de carrusel -->
    <section class="contenedor">
      <!-- Contenedor de elementos -->
      <div class="Promocion">
        <h1>Promociones</h1>
      </div>
      <div id="promociones" class="content">
        <div id="item-container">
          <?php
          require_once("../panel-admin/includes/db.php");
          $result = mysqli_query($conexion, "SELECT * FROM inventario WHERE id_categoria = 8 ");
          $fila = mysqli_fetch_all($result, MYSQLI_ASSOC);

          if (count($fila) > 0) {
            foreach ($fila as $f) {
          ?>
              <div class="item">
                <span class="titulo-item"> <?php echo $f['producto'] ?> </span>
                <div class="imagenCate">
                  <img src="<?= "../panel-admin/img/productos/" . $f["imagen"] ?>" alt="" class="img-item">
                </div>
                <span class="precio-item">$<?php echo number_format($f['venta'], 0) ?></span>
                <p><?php echo $f['minimo'] ?></p>
                <button class="boton-item">
                  <svg viewBox="0 0 16 16" class="bi bi-cart-check" height="24" width="24" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                  </svg>
                  Agregar
                </button>
              </div>
          <?php
            }
          } else {
            echo '<p class="no-products-message">No hay productos disponibles en esta categoría.</p>';
          }
          ?>
        </div>
        
      </div>
  </section>
</div>

<div class="containeres">
  <label class="checkbox">
    <input type="radio" name="checkboxGroup" checked="checkedes">
    <div class="checkmarker"></div>
  </label>
  <label class="checkbox">
    <input type="radio" name="checkboxGroup">
    <div class="checkmarker"></div>
  </label>
  <label class="checkbox">
    <input type="radio" name="checkboxGroup">
    <div class="checkmarker"></div>
  </label>
  <label class="checkbox">
    <input type="radio" name="checkboxGroup">
    <div class="checkmarker"></div>
  </label>
  <label class="checkbox">
    <input type="radio" name="checkboxGroup">
    <div class="checkmarker"></div>
  </label>
</div>
  <p class="ofertas">
        <br /><a href="../productos/productos.php">Ver mas productos</a>
      </p>

  <?php
  include_once('footer.php');
  ?>

  <!-- Carrito de Compras -->
  <div class="carrito" id="carrito">
    <div class="header-carrito">
      <i class="fa-solid fa-xmark" id="cerrarCarrito" onclick="ocultarCarrito()"></i>
      <h2>Carrito de compras</h2>
    </div>

    <div class="carrito-items">
    </div>
    <div class="carrito-total">
      <div class="fila">
        <strong>Total</strong>
        <span class="carrito-precio-total">
          $00,00
        </span>
      </div>
      <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
    </div>
  </div>
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
    <di v>
      <i class="fa-solid fa-user-secret"></i>
      <input type="email" id="" name="" placeholder="Verifica tu correo">
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
          <input type="text" name="" id="" placeholder="Ingrese el nombre de su barrio">
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
          <textarea name="" id="" cols="30" rows="5" placeholder="Escribe tu comentario"></textarea>
        </label>
      </form>
      <button class="btn-guardar" id="btn-guardar"><a href="#">Guardar</a></button>
    </div>
  </div>

  </div> <!-- div container -->
  <script src="https://kit.fontawesome.com/72ac7502a0.js" crossorigin="anonymous"></script>
  <script src="../index/javascript/helper.js"></script>
  <script src="../index/javascript/main.js"></script>
</body>

</html>