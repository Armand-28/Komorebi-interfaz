<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Usuario</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editUser<?php echo $fila['id']; ?>" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Usuario</label>
                                <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $fila['usuario']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Correo</label>
                                <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $fila['correo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Telefono</label><br>
                                <input type="tel" name="telefono" id="telefono" class="form-control" value="<?php echo $fila['telefono']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="username">Rol de Usuario</label><br>
                                <select name="id_rol" id="id_rol" class="form-control" required>
                                    <option <?php echo $fila['id_rol'] === '1' ? 'selected' : ''; ?> value="1">Administrador</option>
                                    <option <?php echo $fila['id_rol'] === '2' ? 'selected' : ''; ?> value="2">Empleado</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <?php
                    $passrand = rand(1000, 9999);
                    ?>

                    <div class="form-group">
                        <label for="password" style="text-align: justify;">Password: (Es necesario generar una nueva contraseña o la contraseña por defecto es: <i><b>Defaultpass: <?php echo $passrand; ?> </b></i>)</label><br>
                        <input type="password" name="password" id="password" class="form-control" value="Defaultpass<?php echo $passrand; ?>">
                    </div>

                    <input type="hidden" name="accion" value="editar_user">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="editarUser(<?php echo $fila['id']; ?>)">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function editarUser(id) {
        var datosFormulario = $("#editUser" + id).serialize();

        $.ajax({
            url: "../includes/functions.php",
            type: "POST",
            data: datosFormulario,
            dataType: "json",
            success: function(response) {
                if (response === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        location.assign('usuarios.php');
                    }, 2000);
                } else {
                    alert("Ha ocurrido un error al actualizar el registro");
                }
            },
            error: function() {
                alert("Error de comunicación con el servidor");
            }
        });
    }
</script>
