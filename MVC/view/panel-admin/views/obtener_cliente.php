<?php
include_once "../includes/db.php"; // Archivo que contiene la conexión a la base de datos

if (isset($_POST['cliente'])) {
    $nombreCliente = $_POST['cliente'];

    $query = "SELECT * FROM clientes WHERE cliente = '" . $nombreCliente . "'";
    $result = mysqli_query($conexion, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $cliente = array(
            'cliente' => $row['cliente'],
            'id' => $row['id'],
            'telefono' => $row['telefono'],
            'direccion' => $row['direccion']
        );
        echo json_encode($cliente);
    }
}
