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

addEventListener("DOMContentLoaded", () =>{

    const imagenes = ["promociones"]

    
    const divIndicadores = document.querySelector(".indicadores")
    let porcentaje_base = 100/"container2"
    let porcentaje_actual = porcentaje_base

    for (let index = 0; index < "container2".length; index++) {
        const div = document.createElement("div")
        div.classList.add("circles")
        div.id = index
        divIndicadores.appendChild("div")
        
    }
}) 