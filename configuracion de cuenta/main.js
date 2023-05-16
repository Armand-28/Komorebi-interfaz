var ventana = document.querySelector(".fa-question")
var cerrar = document.querySelector(".fa-circle-xmark")

ventana.addEventListener("click", () =>{
    document.getElementById("abrir-boton-ayuda").classList.toggle("active")
})
cerrar.addEventListener("click", () =>{
    document.getElementById("abrir-boton-ayuda").classList.toggle("active")
}) 


var transition1 = document.getElementById("perfil");
var transition2 = document.getElementById("carritoCompras");
var transition3 = document.getElementById("direccion");
var transition4 = document.getElementById("pedidos");


function transition(x) {
   
   if (x == 1) {
      transition1.style.display = "block";
      transition2.style.display = "none";
      transition3.style.display = "none";
      transition4.style.display = "none";
   }
   else if (x == 2){
      transition1.style.display = "none";
      transition2.style.display = "block";
      transition3.style.display = "none";
      transition4.style.display = "none";
   }
   else if (x == 3){
      transition1.style.display = "none";
      transition2.style.display = "none";
      transition3.style.display = "block";
      transition4.style.display = "none";
   }
   else if (x == 4){
      transition1.style.display = "none";
      transition2.style.display = "none";
      transition3.style.display = "none";
      transition4.style.display = "block";
   }


}


// modo entrega

var modoEntregaMostrar = document.querySelector(".modoentrega");
var modoEntregaSalir = document.querySelector(".cerrar-modo-entrega");

modoEntregaMostrar.addEventListener("click", () =>{
   document.getElementById("modo-entrega").classList.toggle("active");
})

modoEntregaSalir.addEventListener("click", () =>{
   document.getElementById("modo-entrega").classList.toggle("active");
})
// click para mostrar las ventanas emergentes//

var verificar = document.querySelector(".recoger-tienda");
var verificarCierre = document.querySelector(".btn-verificar");

verificar.addEventListener("click", () =>{
   document.getElementById("modo-entrega").style.display = "none";
   document.getElementById("verificar").style.display = "block";
})

verificarCierre.addEventListener("click", () =>{
   document.getElementById("verificar").style.display = "none";
   document.getElementById("modo-entrega").classList.toggle("active");
})
var seguirComprando = document.querySelector("#btn-verificar");

seguirComprando.addEventListener("click", () =>{
   document.getElementById("donde-encuentras").style.display = "block";
   document.getElementById("cuadro-seguir").classList.toggle("active");
})

var verificar = document.querySelector(".recoger-domicilio");

verificar.addEventListener("click", () =>{
   document.getElementById("verificar").style.display = "block";
   document.getElementById("modo-entrega").style.display = "none";
})
var donEncuentras = document.querySelector("#btn-verificar");

donEncuentras.addEventListener("click", () =>{
   document.getElementById("donde-encuentras").classList.toggle("active");
})

var seguir = document.querySelector("#btn-verificar");

seguir.addEventListener("click", () =>{
   document.getElementById("donde-encuentras").style.opacity = "1"
   document.getElementById("cuadro-seguir").style.display = "none";
})

var guardar = document.querySelector(".btn-guardar");

guardar.addEventListener("click", () =>{
   document.getElementById("donde-encuentras").style.display = "none";
   document.getElementById("cuadro-seguir").style.display = "block";
})