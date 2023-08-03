<?php
include_once "../model/login.php"; 

if(empty($_POST['ctNombre']) || empty($_POST['ctEmail']) || empty($_POST['ctTel']) || empty($_POST['ctFNac']) || empty($_POST['selGen']) || empty($_POST['ctUser']) || empty($_POST['ctPass'])){
    header("Location: ../view/index.html");
} else{
    $name = $_POST['ctNombre'];
    $email = $_POST['ctEmail'];
    $tel = $_POST['ctTel'];
    $fNac = $_POST['ctFNac'];
    $genero = $_POST['selGen'];
    $user = $_POST['ctUser'];
    $pass = $_POST['ctPass'];

    $login = new login(); 

    if($login->guardar($name, $email, $tel, $fNac, $genero, $user, $pass)){
        header("Location: ../view/index.html");
    }else{
        echo "error";
    }

}

?>