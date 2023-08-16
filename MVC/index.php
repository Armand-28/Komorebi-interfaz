<?php
$controller = "index"; 
if(!isset($_REQUEST['a'])){
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'controller'; 
    $controller = new $controller;
    $controller -> Inicio();  
}else{
    $controller = strtolower($_REQUEST['a']); 
    $action = isset($_REQUEST['b']) ? $_REQUEST['b'] : 'Inicio'; 
    $param = isset($_REQUEST['c']) ? $_REQUEST['c'] : ''; 
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'controller'; 
    $controller = new $controller;
    call_user_func(array($controller, $action), $param); 
} 
?>