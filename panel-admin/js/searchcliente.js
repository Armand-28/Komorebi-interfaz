$(document).ready(function() {
    $("#cliente").autocomplete({
        source: "buscar_cliente.php", // Archivo PHP que realiza la búsqueda
        minLength: 2, // Mínimo de caracteres para activar el autocompletado
        select: function(event, ui) {
            var clienteSeleccionado = ui.item.value;

            $.ajax({
                url: "obtener_cliente.php", // Archivo PHP que obtiene los datos del cliente
                type: "POST",
                data: {
                    cliente: clienteSeleccionado
                }, // Enviar el cliente seleccionado al servidor
                dataType: "json",
                success: function(data) {
                    // Mostrar los datos del cliente en los campos correspondientes
                    $("#id").val(data.id);
                    $("#cliente").val(data.cliente);
                    $("#telefono").val(data.telefono);
                    $("#direccion").val(data.direccion);
                }
            });
        }
    });
});