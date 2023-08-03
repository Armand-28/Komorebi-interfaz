<?php

class conexionDatabase{
    public static function conexion(){
        $localhost = "localhost"; 
        $db = "komorebi"; 
        $usuario = "root"; 
        $pass = ""; 
        $conexion = mysqli_connect($localhost, $usuario, $pass, $db);
        return $conexion; 
    }
}

?>