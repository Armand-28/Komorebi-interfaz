<?php

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros
        case 'insertar_categoria':
            insertar_categoria();
            break;

        case 'insertar_proveedor':
            insertar_proveedor();
            break;

        case 'insertar_inventario':
            insertar_inventario();
            break;

        case 'editar_inv':
            editar_inv();
            break;

        case 'editar_prov':
            editar_prov();
            break;

        case 'editar_cat':
            editar_cat();
            break;

        case 'editar_user':
            editar_user();
            break;

        case 'editar_perfil':
            editar_perfil();
            break;
    }
}

function insertar_categoria()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO categorias (categoria) VALUES ('$categoria')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}

function insertar_proveedor()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO proveedores(name,r_social, direccion, telefono, nit, correo) 
    VALUES ('$name', '$r_social','$direccion','$telefono','$nit','$correo')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}

function insertar_inventario()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    // Obtener los datos del archivo enviado
    $imagen = $_FILES['imagen']['tmp_name'];
    $basename = basename($_FILES['imagen']['name']);
    $image_ruta = "../img/productos/" . $basename;

    // $imagen_contenido = file_get_contents($imagen);

    // Escapar el contenido binario para evitar problemas de SQL Injection
    // $imagen_contenido = mysqli_real_escape_string($conexion, $imagen_contenido);

    $resultado = false;

    if (move_uploaded_file($imagen, $image_ruta)) {
        $consulta = "INSERT INTO inventario (codigo, imagen, producto, existencia, minimo, venta, compra, unidad, id_categoria) 
    VALUES ('$codigo', '$basename', '$producto', '$existencia', '$minimo', '$venta', '$compra', '$unidad', '$id_categoria')";

        $resultado = mysqli_query($conexion, $consulta);
    };

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}


function editar_inv()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE inventario SET codigo = '$codigo', producto = '$producto', 
        compra = '$compra',  venta = '$venta', existencia = '$existencia',
		minimo = '$minimo', unidad='$unidad', id_categoria = '$id_categoria' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_prov()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE proveedores SET name = '$name', r_social = '$r_social', 
    direccion = '$direccion',  telefono = '$telefono', nit = '$nit', correo = '$correo' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_cat()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE categorias SET categoria = '$categoria' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_user()
{
    require_once("db.php");
    extract($_POST);
    $password = trim($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);
    $consulta = "UPDATE users SET usuario = '$usuario', correo = '$correo', password = '$password',
		telefono='$telefono', id_rol='$id_rol' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_perfil()
{
    include "db.php";
    extract($_POST);
    $consulta = "UPDATE users SET usuario = '$usuario', correo = '$correo' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado === true) {
        echo json_encode("updated");
    }
    if ($resultado === false) {
        echo json_encode("error");
    }
}
