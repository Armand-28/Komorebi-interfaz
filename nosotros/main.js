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