<?php

include_once('../conexion.php');
$conexion = $conectar;
session_start();
$user = $_SESSION["usuario"];

// Consulta para obtener los datos del cliente
$sql = "SELECT * FROM clientes WHERE user = '$user'";
$result = $conexion->query($sql);
$cliente = array();

if ($result) {
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $cliente = $row;
    }
  } else {
    echo "No se encontraron datos del cliente.";
  }
} else {
  echo "Error en la consulta: " . $conexion->error;
}

?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>perfil usuario | Mi plaza</title>
  <!-- Linking Google font link for icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/96f9a4100d.js" crossorigin="anonymous"></script>
</head>

<body>
  <aside class="sidebar">
    <div class="logo">
      <a href="../interfazUsuario/index.php">
        <img src="images/logo.png" alt="logo">
      </a>
      <h2>Mi plaza Autoservicio</h2>
    </div>
    <ul class="links">
      <h4>Panel de usuario</h4>
      <li>
        <span class="material-symbols-outlined">account_circle</span><!-- no cambiar el que esta en el spam son estolos ya establecios en google icons-->
        <a href="#" data-target="perfil-content">Mi Perfil</a>
      </li>
      <li>
        <span class="material-symbols-outlined">directions_car</span>
        <a href="#" data-target="informa-content">Información domicilio</a>
      </li>
      <li>
        <span class="material-symbols-outlined">shopping_cart</span>
        <a href="#" data-target="card-content">productos comprados</a>
      </li>
      <hr>
      <li>
        <span class="material-symbols-outlined">mail</span>
        <a href="#" data-target="PQR-content">Peticiones y reclamos</a>
      </li>
      <li>
        <span class="material-symbols-outlined" onclick="irInicio()">move_item</span>
        <a href="../index/index.php">Ir a inicio</a>
      </li>
      <li class="logout-link" onclick="cerrarSesion()">
        <span class="material-symbols-outlined">logout</span>
        <a href="cerrarSesion.php">Cerrar sesión</a>
      </li>
    </ul>
  </aside>
  <!-- contenedor principal -->
  <!-- Parte lado izquierda -->
  <div id="agregar-informacion" class="content" style="display: block;">
    <div class="square-box">
      <h2 class="box-title">BIENVENIDO</h2>
      <h4 class="box-title2">MI PLAZA</h4>
      <h6 class="box-title3">AUTOSERVICIO</h6>
      <p class="box-content">
        Cuidando tu hogar y tu bolsillo con los mejores productos al mejor precio
      </p>
    </div>
  </div>
  <div id='perfil-content' class='content'>
    <form class='form' method='POST' action='perfil.php'>
      <h1>Mi Información</h1>
      <!-- Agregar los campos y estilos HTML aquí -->
      <div class='flex'>
        <input type='hidden' name='idcli' value='<?php echo $cliente['id'] ?>' readonly>
        <label>
          <input class="input" type="text" name="cliente" value="<?php echo $cliente["cliente"]; ?>" required>
          <span>Nombres y apellidos</span>
        </label>
        <label>
          <input class="input" type="text" name="usser" value="<?php echo $cliente["user"]; ?>" disabled>
          <span>Nombre de usuario</span>
        </label>
      </div>
      <label>
        <input class="input" type="email" name="email" placeholder="Email" value="<?php echo $cliente["email"]; ?>" required>
        <span>Email</span>
      </label>
      <label class="custom-label">
        <select name="selGen" id="" class="selGen">
          <option disabled <?php echo ($cliente['genero'] <> "Masculino" && $cliente['genero'] <> "Femenino") ? "selected" : "" ?>>Seleccione una opcion</option>
          <option value="Masculino" <?php echo ($cliente['genero'] == "Masculino") ? "selected" : "" ?>>Masculino</option>
          <option value="Femenino" <?php echo ($cliente['genero'] == "Femenino") ? "selected" : "" ?>>Femenino</option>
        </select>
        <span>Genero</span>
      </label>
      <label>
        <input class="input" type="number" name="numcel" placeholder="Teléfono" value="<?php echo $cliente["numcel"]; ?>" required>
        <span>Teléfono</span>
      </label>
      <button class="submit">Guardar</button>
      <p class="signin">Autoservicio Mi plaza</p>
    </form>
  </div>
  <div id="informa-content" class="content" style="display: none;">
    <div class="table-container">
      <table>
        <h1 class="Tupedido">Información de  domicilio</h1>
        <thead>
          <tr>
            <th>Barrio</th>
            <th>Dirección</th>
            <th>Descripción</th> 
          </tr>
          <tr>
            <th>Primero de mayo</th>
            <th>Calle 4 # 10-12</th>
            <th>Casa blanca de dos pisos con reja gris</th>
          </tr>
        </thead>
        <tbody>
          <!-- Filas de la tabla se cargarán aquí -->
        </tbody>
      </table>
    </div>
  </div>

  <div id="card-content" class="content" style="display: none;">
    
  <div class="table-container2">
      <table>
        <h1 class="Tupedido">Tus Compras</h1>
        <thead>
          <tr>
            <th>Producto</th>
            <th>Imagen</th>
            <th>Descripción</th> 
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha</th>    
          </tr>
          <tr>
            <th>.........</th>
            <th>........</th>
            <th>..........</th>
            <th>..........</th>
            <th>..........</th>
            <th>..........</th>
          </tr>
        </thead>
        <tbody>
          <!-- Filas de la tabla se cargarán aquí -->
        </tbody>
      </table>
    </div>
  </div>

  <div id="PQR-content" class="content" style="display: none;">
    <div class="form-google">
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfV1MxgoDi27RHt54G83DCQVzB5N5Im3MOyaZaTakJHOLSvDw/viewform?embedded=true" width="640" height="448" frameborder="0" marginheight="0" marginwidth="0" style="margin-left: 400px; margin-left: 2px; margin-top: 50px;">Cargando…</iframe>
    </div>
  </div>

  <?php
  if (isset($_SESSION['value'])) {
    if ($_SESSION['value'] == true) {
      echo "<script>alert('Datos actualizados correctamente!')</script>";
      unset($_SESSION['value']); // Elimina la variable de sesión después de mostrar la alerta
    }
  }
  ?>
  <footer>
    <p>&copy; 2023 Mi Plaza Autoservicio. Todos los derechos reservados.</p>
  </footer>
</body>
<script src="main.js"></script>

</html>