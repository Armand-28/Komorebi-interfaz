<div class="modal fade" id="inv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nuevo Producto</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="inventarioForm" action="insertar_inventario" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Codigo</label>
                                <input type="number" id="codigo" name="codigo" class="form-control" required>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="producto" class="form-label">Nombre</label>
                                <input type="text" id="producto" name="producto" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="cantidad">Cantidad del Articulo</label><br>
                                <input type="number" name="existencia" id="existencia" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="minimo">Descripción</label><br>
                                <input type="text" name="minimo" id="minimo" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="mb-3">
                                <label for="fecha">Fecha de ingreso</label><br>
                                <input type="date" name="fecha" id="fecha" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Tipo de Unidad</label><br>
                                <select name="unidad" id="unidad" class="form-control" required>
                                    <option <?php echo $fila['unidad'] === '' ? 'selected' : ''; ?> value="">Selecionar</option>
                                    <option <?php echo $fila['unidad'] === 'Gr' ? 'selected' : ''; ?> value="Gr">Gramos</option>
                                    <option <?php echo $fila['unidad'] === 'Lb' ? 'selected' : ''; ?> value="Lb">Libras</option>
                                    <option <?php echo $fila['unidad'] === 'Kg' ? 'selected' : ''; ?> value="Kg">Kilogramos</option>
                                    <option <?php echo $fila['unidad'] === 'Ml' ? 'selected' : ''; ?> value="Ml">Mililitros</option>
                                    <option <?php echo $fila['unidad'] === 'Cm' ? 'selected' : ''; ?> value="Cm">Centimetros</option>
                                    <option <?php echo $fila['unidad'] === 'Mt' ? 'selected' : ''; ?> value="Mt">Metros</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="compra">Precio de Compra</label><br>
                                <input type="number" name="compra" id="compra" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="venta">Precio de Venta </label><br>
                                <input type="number" step=".01" id="venta" name="venta" class="form-control">
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="id_categoria">Categoria</label><br>
                                <select name="id_categoria" id="id_categoria" class="form-control" required>
                                    <?php
                                    include("../includes/db.php");
                                    //Codigo para mostrar categorias desde otra tabla
                                    $sql = "SELECT * FROM categorias ";
                                    $resultado = mysqli_query($conexion, $sql);
                                    while ($consulta = mysqli_fetch_array($resultado)) {
                                        echo '<option name="id_categoria" value="' . $consulta['id'] . '">' . $consulta['categoria'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="venta">Imagen de producto </label><br>
                                <input type="file" id="imagen" name="imagen" class="form-control">
                            </div>
                        </div>
                    </div>



                    <input type="hidden" name="accion" value="insertar_inventario">

                    <br>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>

<script>
   $(document).ready(function() {
    $('#inventarioForm').submit(function(e) {
        e.preventDefault(); // Evita que el formulario se envíe de forma predeterminada
        var formData = new FormData($("#inventarioForm")[0]);
        formData.append("imagen", $("#imagen")[0].files[0]);

        $.ajax({
            url: '../includes/functions.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            processData: false, // Evita que jQuery procese los datos
            contentType: false, // Evita que jQuery configure el tipo de contenido
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: 'Los datos se guardaron correctamente'
                    }).then(function() {
                        window.location = "inventario.php"; // Redirecciona al usuario a la página deseada
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocurrió un error inesperado'
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocurrió un error inesperado'
                });
            }
        });
    });
});

</script>