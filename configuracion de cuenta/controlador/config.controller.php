<?php 

include_once "../modelo/config.php"; 

$modelo = new config(); 
$modelo->Inicio(); 

$session->cerrarSesion();

?>