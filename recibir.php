<?php
include("conexion.php");

$consulta = "SELECT * FROM productos";
$execute = mysqli_query($conectar, $consulta) or die ("Error").mysqli_error($conexion);
 

?>