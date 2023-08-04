<?php

include_once "model/index.php"; 

class IndexController{

    private $object; 

    public function __construct(){
        $this-> object = new Index(); 
    }

    public function Inicio(){
        $style = "<link rel='stylesheet' type='text/css' href='assets/css/style-index.css'>"; 
        require_once "view/head.php"; 
        require_once "view/index/index.php"; 
    }

}

?>