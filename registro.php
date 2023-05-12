<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$auxid = $_POST['auxid'];
$auxrolid = $_POST['auxrolid'];
$auxname = $_POST['auxname'];
$auxsurname = $_POST['auxsurname'];
$auxnumcel = $_POST['auxnumcel'];
$auxaddres = $_POST['auxaddres'];


$datosIngreso = "INSERT INTO 'auxiliar' VALUES('$auxid', '$auxname', '$auxsurname', '$auxnumcel','$auxaddres')";

$resultado = mysqli_query($conectar, $datosIngreso)or die("error de registro");

echo "Registro exitoso";

if ($resultado) {
    header("location: auxiliar/auxiliar.html");
}

mysqli_close($conectar);


?>