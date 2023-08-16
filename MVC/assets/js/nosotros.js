// codigo para hacer un menu lateral aparecer y desaparecer

var barlat = document.querySelector(".fa-bars")
var cerrar = document.querySelector(".fa-xmark")

barlat.addEventListener("click", () =>{
   document.getElementById("menu").classList.toggle("active")
})

// codigo para salir de el menu
cerrar.addEventListener("click", () =>{
  document.getElementById("menu").classList.toggle("active")
})


var abrir = document.querySelector(".fa-question")
var cierre = document.querySelector(".fa-circle-xmark")


abrir.addEventListener("click", () =>{
   document.getElementById("abrir-boton-ayuda").classList.toggle("active")
})

cierre.addEventListener("click", () =>{
   document.getElementById("abrir-boton-ayuda").classList.toggle("active")
}) 

// seccion de modo de entrega

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