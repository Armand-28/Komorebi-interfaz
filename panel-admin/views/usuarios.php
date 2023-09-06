

    <?php include "../includes/header.php"; ?>


    <body id="page-top">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
                    <br>

                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#user">
                        <span class="glyphicon glyphicon-plus"></span> Agregar usuario <i class="fa fa-user-plus"></i> </a></button>
                </div>
                <?php include "../includes/sesion/registros.php"; ?>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Rol</th>
                                    <th>Fecha de Modificacion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                require_once("../includes/db.php");
                                $result = mysqli_query($conexion, "SELECT * FROM users ");
                                while ($fila = mysqli_fetch_assoc($result)) :
                                ?>
                                    <tr>
                                        <td><?php echo $fila['usuario']; ?></td>
                                        <td><?php echo $fila['correo']; ?></td>
                                        <td><?php echo $fila['telefono']; ?></td>
                                        <td><?php echo $fila['id_rol']; ?></td>
                                        <td><?php echo $fila['fecha']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo $fila['id']; ?>">
                                                <i class="fa fa-edit "></i>
                                            </button>
                                            <a href="../includes/eliminar_user.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger btn-del">
                                                <i class="fa fa-trash "></i></a>
                                        </td>
                                    </tr>
                                    <?php include "editar_user.php"; ?>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                        <script>
                            $('.btn-del').on('click', function(e) {
                                e.preventDefault();
                                const href = $(this).attr('href')

                                Swal.fire({
                                    title: 'Estas seguro de eliminar este registro?',
                                    text: "¡No podrás revertir esto!!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Si, eliminar!',
                                    cancelButtonText: 'Cancelar!',
                                }).then((result) => {
                                    if (result.value) {
                                        if (result.isConfirmed) {
                                            Swal.fire(
                                                'Eliminado!',
                                                'El registro fue eliminado.',
                                                'success'
                                            )
                                        }

                                        document.location.href = href;
                                    }
                                })

                            })
                        </script>


                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->






        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->




    </body>


    <?php include "../includes/footer.php"; ?>

    </html>
