<?php 


class config {

    public function Inicio(){
        header("Location: ../../index/index.php"); 
    }


    public function userExist($nombre, $contraseña){
        $saludo = "hola soy $nombre y contraseña $contraseña"; 
        return $saludo; 
    }

    public function cerrarSesion(){
        // Destruye la sesión
        session_destroy();

        // Redirige al lugar que desees después de cerrar sesión
        header("Location: ../../../index/index.php");
        exit();

    }
}
