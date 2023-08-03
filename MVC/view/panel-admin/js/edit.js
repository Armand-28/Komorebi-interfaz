$("#submitedit").click(function (e) {
  e.preventDefault();
  var datos = new FormData();
  datos.append('accion', 'editar_perfil')
  datos.append('id', $("#usuario").data("id"))
  datos.append('usuario', $("#usuario").val())
  datos.append('correo', $("#correo").val())
  datos.append('rol', $("#rol").val())


  fetch('../includes/functions.php', {
    method: 'POST',
    body: datos

  }).then((response) => response.json()).then((response => {
    confirmation(response);
  }))
});

function confirmation(r) {
  if (r) {
    if (r === "updated") {
      alert('Guardando Cambios. Por favor inicia sesión nuevamente...');
      setTimeout(function () {
        url = "../includes/sesion/cerrarSesion.php";
        $(location).attr('href', url);
      }, 3000);
    }
  }
}