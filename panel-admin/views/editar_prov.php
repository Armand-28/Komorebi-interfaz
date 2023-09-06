<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Proveedor</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editProv<?php echo $fila['id']; ?>" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control" value="<?php echo $fila['name']; ?>" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Razon Social</label>
                                <input type="text" id="r_   social" name="r_social" class="form-control" value="<?php echo $fila['r_social']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Direccion</label><br>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $fila['direccion']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Telefono</label><br>
                                <input type="tel" name="telefono" id="telefono" class="form-control" value="<?php echo $fila['telefono']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nit">Nit </label><br>
                                <input type="text" name="nit" id="nit" class="form-control" value="<?php echo $fila['nit']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Correo </label><br>
                                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $fila['correo']; ?>" required>
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="accion" value="editar_prov">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">


                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="editarProv(<?php echo $fila['id']; ?>)">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>

<script>
    function editarProv(id) {
        var datosFormulario = $("#editProv" + id).serialize();

        $.ajax({
            url: "../includes/functions.php",
            type: "POST",
            data: datosFormulario,
            dataType: "json",
            success: function(response) {
                if (response === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        location.assign('proveedores.php');
                    }, 2000);
                } else {
                    alert("Ha ocurrido un error al actualizar el registro");
                }
            },
            error: function() {
                alert("Error de comunicacion con el servidor");
            }
        });
    }
</script>