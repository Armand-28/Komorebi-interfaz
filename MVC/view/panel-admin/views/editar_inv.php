<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Producto</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editInv<?php echo $fila['id']; ?>" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Codigo</label>
                                <input type="text" id="codigo" name="codigo" class="form-control" value="<?php echo $fila['codigo']; ?>" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre       </label>
                                <input type="text" id="producto" name="producto" class="form-control" value="<?php echo $fila['producto']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Cantidad</label><br>
                                <input type="number" name="existencia" id="existencia" class="form-control" value="<?php echo $fila['existencia']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Minimo</label><br>
                                <input type="number" name="minimo" id="minimo" class="form-control" value="<?php echo $fila['minimo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Precio Venta </label><br>
                                <input type="number" step=".01" id="venta" name="venta" class="form-control" value="<?php echo $fila['venta']; ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Precio Compra </label><br>
                                <input type="number" step=".01" id="compra" name="compra" class="form-control" value="<?php echo $fila['compra']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Tipo de Unidad</label><br>
                                <select name="unidad" id="unidad" class="form-control" required>
                                    <option <?php echo $fila['unidad'] === 'UND' ? 'selected' : ''; ?> value="UND">UND</option>
                                    <option <?php echo $fila['unidad'] === 'PZA' ? 'selected' : ''; ?> value="PZA">PZA</option>
                                    <option <?php echo $fila['unidad'] === 'PAQUETES' ? 'selected' : ''; ?> value="PAQUETES">PAQUETES</option>
                                    <option <?php echo $fila['unidad'] === 'KG' ? 'selected' : ''; ?> value="KG">KG</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="username">Categoria</label><br>
                                <select name="id_categoria" id="id_categoria" class="form-control" required>
                                    <option <?php echo $fila['id_categoria'] === 'id_categoria' ? 'selected' : ''; ?> value="<?php echo $fila['id_categoria']; ?>"><?php echo $fila['id_categoria']; ?></option>
                                    <?php
                                    include("../includes/db.php");
                                    // Codigo para mostrar categorias desde otra tabla
                                    $sql = "SELECT * FROM categorias ";
                                    $resultado = mysqli_query($conexion, $sql);
                                    while ($consulta = mysqli_fetch_array($resultado)) {
                                        $selected = $fila['id_categoria'] === $consulta['id'] ? 'selected' : '';
                                        echo '<option value="' . $consulta['id'] . '" ' . $selected . '>' . $consulta['categoria'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="accion" value="editar_inv">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="editarInv(<?php echo $fila['id']; ?>)">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<script>
    function editarInv(id) {
        var datosFormulario = $("#editInv" + id).serialize();

        $.ajax({
            url: "../includes/functions.php",
            type: "POST",
            data: datosFormulario,
            dataType: "json",
            success: function(response) {
                if (response === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        location.assign('inventario.php');
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