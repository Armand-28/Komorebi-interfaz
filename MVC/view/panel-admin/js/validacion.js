var
    closeInSeconds = 5,
    displayText = "Redireccionando a la pagina principal...",
    title = "Debes iniciar sesion primero para poder acceder al sistema",
    url = "../includes/sesion/cerrarSesion.php",
    timer;
   

$(document).ready(function () {
    
    

    let timerInterval
    Swal.fire({
      title: title,
      html: 'Por favor inicia sesion nuevamente en <b></b> segundos',
      timer: 2000,
      icon: 'error',
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer')
      }
    })
    
timer = setInterval(function() {

    closeInSeconds--;

    if (closeInSeconds < 0) {

        clearInterval(timer);
    }

    $('.sweet-alert > p').text(displayText.replace(/#1/, closeInSeconds));

}, 1000);


});
setTimeout(function(){
    $(location).attr('href',url);
    },3000);


