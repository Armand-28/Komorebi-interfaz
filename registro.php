<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);


include("conexion.php");


$rolidrol = $_POST['rolidrol'];
$rol = $_POST['rol'];
$rolidper = $_POST['rolidper'];
$rolname = $_POST['rolname'];
$rolsurname = $_POST['rolsurname'];
$roladdres = $_POST['roladdres'];
$rolemail = $_POST['rolemail'];
$rolpass = $_POST['rolpass'];
$rolnumper = $_POST['rolnumper'];

$consulta = "INSERT INTO `rol` (`rolidrol`, `rol`, `rolidper`, `rolname`, `rolsurname`, `roladdres`, `rolemail`, `rolpass`, `rolnumper`) VALUES ('$rolidrol', '$rol', '$rolidper', '$rolname', '$rolsurname', '$roladdres', '$rolemail', '$rolpass', '$rolnumper')";

$resultado = mysqli_query($conectar, $consulta) or die("Error de registro");

echo "registro exitoso";


mysqli_close($conectar);
?>
