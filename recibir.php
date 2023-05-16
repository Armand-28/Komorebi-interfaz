<?php
include("conexion.php");

$consulta = "SELECT * FROM productos";
$execute = mysqli_query($conexion, $consulta) or die ("Error").mysqli_error($conexion);

while($mostrar = mysqli_fetch_array($execute)){
    $mostrar['cliname'];
    $mostrar['cliemail'];
    $mostrar['clinumcel'];
    $mostrar['cligenero'];
    $mostrar['clifecnac'];
    $mostrar['clicontra'];
}
?>