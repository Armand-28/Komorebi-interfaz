<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>header</title>
    <link rel="stylesheet" type="text/css" href="../index/css/header.css">
    <script src="https://kit.fontawesome.com/96f9a4100d.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fliud">
    <header>
      <div class="header-top">
        <div class="social-networks">
          <a href="#" class="icon-link" data-tooltip="Llamar"><i class="fa fa-phone"></i></a>
          <a href="#" class="icon-link" data-tooltip="Perfil"><i class="fa fa-user"></i></a>
          <a href="#" class="icon-link" data-tooltip="Mensaje"><i class="fa fa-message"></i></a>
      </div>     
          <div class="logo">
              <a href="../index/index.php"><img src="../imagenes/logo rojo.png" alt=""></a>
          </div>
      </div>
      <div class="header-bottom">
          <div class="icon-menu" onclick="menuAparecer();">
              <i class="fa-solid fa-bars"></i>
          </div>
          <div class="logoPrincipal">
              <a href="../index/index.php"><img src="../imagenes/logo blanco index.png" alt=""></a>
          </div>
          <div class="search">
              <div id="search-bar">
                  <input type="search" name="searchInput" placeholder="¿Que buscas hoy?">
              </div>
              <div class="other-services">
                  <a href="#">
                  <i class="fa-solid fa-truck-moving"></i><span class="link-text">Modo de Entrega</span>
                  </a>
                  <a href="../nosotros/nosotros.php">
                    <i class="fa-solid fa-store"></i><span class="link-text">¿Quienes somos?</span>
                  </a>
                </div>
          </div>
          <div class="services">
              <a class="carro" href="#" onclick="hacerVisibleCarrito()">
                  <i class="fa-solid fa-cart-shopping micarrito"></i>
                  <p id="texto-carrito">Mi carrito</p>
              </a>
              <!-- Cuenta -->
        <?php
          session_start();
          if(isset($_SESSION['usuario'])){
            if($_SESSION['usuario'] == "Administrador" ){
              echo "
                <p class='cuenta'>
                  <a href='../panel-admin/index.php'>
                  <i class='fa-solid fa-circle-user'></i>
                  <li class='li-2' style=' text-align: justify; padding:0px 12px;' ><a href='../panel-admin/index.php'>".$_SESSION['usuario']."</a></li></a>
                  
                </p>
              ";  
            }else{
              echo "
                <p class='cuenta'>
                  <a href='../interfazUsuario/index.php'>
                  <i class='fa-solid fa-circle-user'></i>
                  <li class='li-2' style=' text-align: justify; padding:0px 12px;' ><a href='../interfazUsuario/index.php'>".$_SESSION['usuario']."</a></li></a>
                </p>
               
              ";
            }
          }else{
            echo "
              <p class='cuenta'>
                <a href='../login/logica/view/index.php'>
                <i class='fa-solid fa-circle-user'></i>
                <li class='li-2'><a href='../login/logica/view/index.php'>Mi cuenta</a></li></a>
              </p>
            ";
          }
        ?>
          </div>
      </div>
    </header>     
    <div id="menu">
      <ul>
        <p><i class="fa-sharp fa-solid fa-xmark"></i></p>
        <li><a href="../productos/productos.php"> Resfrigerados</a></li>
        <li><a href="../productos/productos.php"> Snacks y pasabocas</a></li>
        <li><a href="../productos/productos.php"> Cuidado personal</a></li>
        <li><a href="../productos/productos.php"> Aseo del hogar</a></li>
        <li><a href="../productos/productos.php"> Granos</a></li>
        <li><a href="../productos/productos.php"> Bebidas</a></li>
      </ul>
      </div> 
  </div>
</body>
  </html>
  <script src="../index/helper.js"></script>
  <script src="../index/main.js"></script>
  