<?php
$error_response = "error";
$success_response = "success";
require_once('../db.php');
if(isset ($_POST['login'])){
$usuario = $_POST['usuario'];
$password =  $_POST['password']; 
global $conexion;
$query_login = "SELECT * FROM users WHERE usuario = '$usuario'";
$db_consult = mysqli_query($conexion, $query_login);
$row_num = mysqli_num_rows($db_consult);
    if($row_num){
    
        $fetch_result =  mysqli_fetch_assoc($db_consult);
        $user_data = [
            'usuario' => $fetch_result['usuario'],
            'password' => $fetch_result['password'],
            'type' => $fetch_result['id_rol']
        ];
            if(password_verify($password, $user_data['password'])){
            session_start();
            $_SESSION['usuario']=$user_data['usuario'];
            $_SESSION['type'] =$user_data['type']; 

                if($_SESSION['type'] && $_SESSION['usuario']){
                    echo json_encode($success_response);
                }
                else{
                    echo json_encode($error_response);
                    session_destroy();
                }
            } 
            else{
                echo json_encode($error_response);
            } 
    }
    else
    {
        echo json_encode($error_response);
    }

}
