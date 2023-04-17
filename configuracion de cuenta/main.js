var ventana = document.querySelector(".fa-question")
var cerrar = document.querySelector(".fa-circle-xmark")

ventana.addEventListener("click", () =>{
    document.getElementById("abrir-boton-ayuda").classList.toggle("active")
})
cerrar.addEventListener("click", () =>{
    document.getElementById("abrir-boton-ayuda").classList.toggle("active")
})