<?php
require_once("../db.php");
if (isset($_POST)) {
    extract($_POST);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);

    $sql = "SELECT * FROM  users WHERE usuario = '$usuario'";
    $validuser = mysqli_query($conexion, $sql);
    $rows = mysqli_num_rows($validuser);
    if ($rows >= 1) {
        echo json_encode('mail');
        die();
    }
    if (strcmp($password, $password2) !== 0) {
        echo json_encode('pass');
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);

        $consulta = "INSERT INTO users (usuario, correo, telefono, password, id_rol)
	VALUES ('$usuario', '$correo ', '$telefono', '$password', '$id_rol')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            echo json_encode('success');
        } else {
            echo json_encode('error');
        }
    }
} else {
    echo 'No data';
}



