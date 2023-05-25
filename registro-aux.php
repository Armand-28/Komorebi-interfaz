<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);


include('conexion.php');

$auxid = $_POST['auxid'];
$auxrolid = $_POST['auxrolid'];
$auxname = $_POST['auxname'];
$auxsurname = $_POST['auxsurname'];
$auxnumcel = $_POST['auxnumcel'];
$auxaddres = $_POST['auxaddres'];

$consulta = "INSERT INTO `auxiliar` (`auxid`, `auxrolid`, `auxname`, `auxsurname`, `auxnumcel`, `auxaddres`) VALUES ('$auxid', '$auxrolid', '$auxname', '$auxsurname', '$auxnumcel', '$auxaddres')";

$resultado = mysqli_query($conectar, $consulta) or die("Error de registro");

echo "El registro ha sido exitoso";

mysqli_close($conectar);





?>
