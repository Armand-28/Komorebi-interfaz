<?php
// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('../conexion.php');
    $conn = $conectar; 
    $clienteID = $_POST['idcli']; 
    $nombresApellidos = $_POST["cliente"];
    $email = $_POST["email"];
    $numCel = $_POST["numcel"];
    $gen = $_POST["selGen"];

    // Actualizar los datos del cliente en la base de datos
    $updateSql = "UPDATE clientes SET cliente='$nombresApellidos', email='$email', numcel='$numCel', genero='$gen' WHERE id=$clienteID";

    if ($conn->prepare($updateSql)->execute() === TRUE) {
        session_start();
        header("location: index.php");
        $_SESSION["value"] = true; 
        exit(); 
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}
?>