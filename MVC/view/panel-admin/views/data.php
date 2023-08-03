<?php
include "../includes/db.php";
$codigo = $_POST['codigo'];

$sql = "SELECT * FROM inventario WHERE id='$codigo'";

$result = mysqli_query($conexion, $sql);

$cadena = "<label>Codigo de Barra</label> 
			<select class='form-control' required id='codigo' name='codigo'>";

while ($ver = mysqli_fetch_assoc($result)) {
    $cadena = $cadena . '<option value=' . $ver['codigo'] . '>' . utf8_encode($ver['codigo']) . '</option>';
}

echo  $cadena . "</select>";
