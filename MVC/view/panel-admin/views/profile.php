<?php include "../includes/header.php"; ?>
<?php include "../includes/db.php"; ?>
<?php
error_reporting(0);
session_start();
$actualsesion = $_SESSION['usuario'];

if ($actualsesion == null || $actualsesion == '') {
}
?>
<?php
$id = $_GET['id'];
$sql = "SELECT  u.id, u.usuario, u.correo, u.password, u.fecha, p.rol FROM users u
LEFT JOIN permisos p ON u.id_rol= p.id  WHERE usuario ='$actualsesion'";
$usuarios = mysqli_query($conexion, $sql);
if ($usuarios->num_rows > 0) {
    foreach ($usuarios as $key => $fila) {




?>
        <tr>

        </tr>


<?php
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
    <div class="container">
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Perfil</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">Informacion Personal</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">

                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                <img src="../img/undraw_profile.svg" alt="Profile" class="rounded-circle">
                                <h2><?php echo $fila['usuario']; ?></h2>
                                <h3><?php echo $fila['rol']; ?></h3>
                                <div class="social-links mt-2">
                                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Perfil</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                                    </li>



                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                       <br>
                                        <h5 class="card-title">Detalles de Perfil</h5>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Nombre</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $fila['usuario']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Correo</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $fila['correo']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Fecha de Registro</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $fila['fecha']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Tipo de usuario</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $fila['rol']; ?></div>
                                        </div>



                                    </div>

                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                        <!-- Profile Edit Form -->

                                        <form id="form">


                                            <div class="row mb-3">
                                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nombre</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="usuario" type="text" data-id="<?php echo $fila['id']; ?>" class="form-control" id="usuario" value="<?php echo $fila['usuario']; ?>">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Correo</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="correo" type="text" class="form-control" id="correo" value="<?php echo $fila['correo']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Contraseña</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="text" class="form-control" id="password" value="<?php echo $fila['password']; ?>">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" id="submitedit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->

                                    </div>


                                </div>

</body>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/edit.js"></script>

</html>

<?php include "../includes/footer.php"; ?>