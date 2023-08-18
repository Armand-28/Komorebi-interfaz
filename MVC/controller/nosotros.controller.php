<?php

class nosotrosController{


    public function Inicio(){
        $style = "<link rel='stylesheet' type='text/css' href='assets/css/style-nosotros.css'>"; 
        require_once "view/head.php"; 
        require_once "view/header.php";
        require_once "view/nosotros/nosotros.php"; 
        require_once "view/footer.php"; 
    }
    
}

?>