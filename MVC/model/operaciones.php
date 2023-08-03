<?php 
// include("conexion.php");

// $cliName = $_POST['cliname'];
// $cliEmail = $_POST['cliemail'];
// $cliNuncel = $_POST['clinumcel'];
// $cliGen = $_POST['cligenero'];
// $cliFecnac = $_POST['clifecnac'];
// $cliContra = $_POST['clicontra'];

// $insertarDatos = "INSERT INTO `cliente` (`cliname`, `cliemail`, `clinumcel`, `cligenero`, `clifecnac`, `clicontra`) VALUES ('$cliName','$cliEmail','$cliNuncel','$cliGen','$cliFecnac','$cliContra')";

// $resulatdo = mysqli_query($conectar, $insertarDatos) or die ("Error al insertar datos". mysqli_error($conectar));


// echo "registro correcto";

// mysqli_close($conectar);

// header("Location: login/login.html");

//////////////////////////////////////////////////////////////////////////////

// include("conexion.php");

// $consulta = "SELECT * FROM productos";
// $execute = mysqli_query($conexion, $consulta) or die ("Error").mysqli_error($conexion);

// while($mostrar = mysqli_fetch_array($execute)){
//     $mostrar['cliname'];
//     $mostrar['cliemail'];
//     $mostrar['clinumcel'];
//     $mostrar['cligenero'];
//     $mostrar['clifecnac'];
//     $mostrar['clicontra'];
// }


////////////////////////////////////////////////////////////////////////////////

// ini_set("display_errors", 1);
// error_reporting(E_ALL);


// include('conexion.php');

// $auxid = $_POST['auxid'];
// $auxrolid = $_POST['auxrolid'];
// $auxname = $_POST['auxname'];
// $auxsurname = $_POST['auxsurname'];
// $auxnumcel = $_POST['auxnumcel'];
// $auxaddres = $_POST['auxaddres'];

// $consulta = "INSERT INTO `auxiliar` (`auxid`, `auxrolid`, `auxname`, `auxsurname`, `auxnumcel`, `auxaddres`) VALUES ('$auxid', '$auxrolid', '$auxname', '$auxsurname', '$auxnumcel', '$auxaddres')";

// $resultado = mysqli_query($conectar, $consulta) or die("Error de registro");

// echo "El registro ha sido exitoso";

// mysqli_close($conectar);


///////////////////////////////////////////////////////////////////////////////////////

// ini_set('display_errors', 1);
// error_reporting(E_ALL);


// include("conexion.php");


// $rolidrol = $_POST['rolidrol'];
// $rol = $_POST['rol'];
// $rolidper = $_POST['rolidper'];
// $rolname = $_POST['rolname'];
// $rolsurname = $_POST['rolsurname'];
// $roladdres = $_POST['roladdres'];
// $rolemail = $_POST['rolemail'];
// $rolpass = $_POST['rolpass'];
// $rolnumper = $_POST['rolnumper'];

// $consulta = "INSERT INTO `rol` (`rolidrol`, `rol`, `rolidper`, `rolname`, `rolsurname`, `roladdres`, `rolemail`, `rolpass`, `rolnumper`) VALUES ('$rolidrol', '$rol', '$rolidper', '$rolname', '$rolsurname', '$roladdres', '$rolemail', '$rolpass', '$rolnumper')";

// $resultado = mysqli_query($conectar, $consulta) or die("Error de registro");

// echo "registro exitoso";


// mysqli_close($conectar);


?>