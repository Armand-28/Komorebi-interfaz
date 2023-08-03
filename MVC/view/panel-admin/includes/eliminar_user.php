<?php

session_start();
error_reporting(0);


	$id = $_GET['id'];
	include "db.php";
	$query = mysqli_query($conexion,"DELETE FROM users WHERE id = '$id'");
	
	header ('Location: ../views/usuarios.php?m=1');

?>
