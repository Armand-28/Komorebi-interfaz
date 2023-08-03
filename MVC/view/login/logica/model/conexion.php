<?php
class databaseConexion{

    public static function conexion(){
        $conexion = mysqli_connect("localhost", "root", "", "komorebi");
        return $conexion;
    }
    
}