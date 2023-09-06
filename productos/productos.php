<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Producto</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
  </style>
  <link rel="stylesheet" href="../productos/main.css">

</head>

<body>

  <?php
  include_once('../index/header.php');
  ?>
  <div class="container2" id="container2">
    <nav class="lines">
      <a href="#" data-content="refrigerados">Refrigerados</a>
      <a href="#" data-content="snacks">Snacks y pasabocas</a>
      <a href="#" data-content="cuidado-personal">Cuidado personal</a>
      <a href="#" data-content="aseo-hogar">Aseo del hogar</a>
      <a href="#" data-content="granos">Granos</a>
      <a href="#" data-content="despensa">Despensa</a>
      <a href="#" data-content="bebidas">Bebidas</a>
    </nav>
  </div>
  <!-- aqui va la parte de la informacion que va cada uno de las categorias -->
  <div class="content-boxes">
    <div id="refrigerados" class="content">
      <div id="refrigerados-container">
        <?php
        require_once("../panel-admin/includes/db.php");
        $result = mysqli_query($conexion, "SELECT * FROM inventario WHERE id_categoria = 1 ");
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
    </div>
  </div>

  <div id="snacks" class="content">
    <div id="snacks-container">
      <?php
      require_once("../panel-admin/includes/db.php");
      $result = mysqli_query($conexion, "SELECT * FROM inventario WHERE id_categoria = 2 ");
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
  <div id="cuidado-personal" class="content">
    <div id="cuidadoPersonal-container">
      <?php
      require_once("../panel-admin/includes/db.php");
      $result = mysqli_query($conexion, "SELECT * FROM inventario WHERE id_categoria = 3 ");
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
  <div id="aseo-hogar" class="content">
    <div id="aseo-container">
      <?php
      require_once("../panel-admin/includes/db.php");
      $result = mysqli_query($conexion, "SELECT * FROM inventario WHERE id_categoria = 4 ");
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
  <div id="granos" class="content">
    <div id="granos-container">
      <?php
      require_once("../panel-admin/includes/db.php");
      $result = mysqli_query($conexion, "SELECT * FROM inventario WHERE id_categoria = 5 ");
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
  <div id="despensa" class="content">
    <div id="despensa-container">
      <?php
      require_once("../panel-admin/includes/db.php");
      $result = mysqli_query($conexion, "SELECT * FROM inventario WHERE id_categoria = 6 ");
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
  <div id="bebidas" class="content">
    <div id="bebidas-container">
      <?php
      require_once("../panel-admin/includes/db.php");
      $result = mysqli_query($conexion, "SELECT * FROM inventario WHERE id_categoria = 7 ");
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
  </div>
  </div>
  </section>
  <!-- carrito de compras  -->

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

  </div>
</body>
<script src="../productos/main.js"></script>
<script src="../index/javascript/helper.js"></script>
<script src="../index/javascript/main.js"></script>
<script src="https://kit.fontawesome.com/72ac7502a0.js" crossorigin="anonymous"></script>

</html>