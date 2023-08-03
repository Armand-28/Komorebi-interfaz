<?php

require_once "lib/database/conexion.php"; 

class Index{
    private $objeto; 

    public function __construct(){
        try{
            $this->objeto = conexionDatabase::conexion();
        }catch(Exception $e){
            echo "Error al conectar la base de datos: ". $e->getMessage(); 
        }
    }
}


?>
