<?php

include_once 'conexion.php';

class login
{
    private $conexion;


    // public function __construct()
    // {
    //     try {
    //         $this->conexion = databaseConexion::conexion();
    //     } catch (Exception $e) {
    //         echo "Error al conectar la base de datos: " . $e->getMessage();
    //     }
    // }

    public function guardar($name, $email, $tel, $fNac, $genero, $user, $pass)
    {
        try {
            $conexion = mysqli_connect("localhost", "root", "", "komorebi");
            $sql = "INSERT INTO clientes(cliente, email, numcel, genero, fecnac, user, pass) VALUES ('" . $name . "', '" . $email . "','" . $tel . "', '" . $genero . "', '" . $fNac . "', '" . $user . "', '" . $pass . "')";
            $consulta = $conexion->prepare($sql);
            if($consulta->execute()){
                return true;
            } else{
                return false;
            }
        } catch (Exception $e) {
            echo "Error al guardar Cliente: " . $e->getMessage();
        }
    }

    public function usuarioExiste(){
        
    }

}
