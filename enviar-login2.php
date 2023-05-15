<?php 
    include("conexion.php");
    
        $cliName = $_POST['cliname'];
        $cliEmail = $_POST['cliemail'];
        $cliNuncel = $_POST['clinumcel'];
        $cliGen = $_POST['cligenero'];
        $cliFecnac = $_POST['clifecnac'];
        $cliContra = $_POST['clicontra'];

        $insertarDatos = "INSERT INTO `cliente` (`cliname`, `cliemail`, `clinumcel`, `cligenero`, `clifecnac`, `clicontra`) VALUES ('$cliName','$cliEmail','$cliNuncel','$cliGen','$cliFecnac','$cliContra')";

        $resulatdo = mysqli_query($conectar, $insertarDatos) or die ("Error al insertar datos". mysqli_error($conectar));


        echo "registro correcto";

        mysqli_close($conectar);

        header("Location: login/login.html");
    ?>






