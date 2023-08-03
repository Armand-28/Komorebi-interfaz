<?php



$controller = "index"; 

if(!isset($_REQUEST['a'])){
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'controller'; 
    $controller = new $controller;
    $controller -> Inicio();  
}else{} 


?>