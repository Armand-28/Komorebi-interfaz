var secciones = document.querySelectorAll("div")
// permite recorrer todas nuestras secciones
secciones.forEach(e =>{
    e.addEventListener("click", function(e){

// anadir un evento a cada div selecionado
    const padre = e.target.parentNode;
    padre.children[1].classList.toggle("animation");
    padre.parentNode.children[1].classList.toggle("animation");
    
    })
}) 






































// var mostrar = document.querySelector(".fa-chevron-right")
// var cerrar = document.querySelector(".cerrar-datos")

// mostrar.addEventListener("click", () =>{
//     document.getElementById("formu1").style.display = "block";
// })

// cerrar.addEventListener("click", () => {
//     document.getElementById("formu1").style.display = 'none';
// })

// var mostrar = document.querySelector("#abajo")
// var cerrar = document.querySelector("#arriba")

// mostrar.addEventListener("click", () =>{
//     document.getElementById("formu22").style.display = "block";
// })
// cerrar.addEventListener("click", () =>{
//     document.getElementById("formu22").style.display = "none";
// })
// var mostrar = document.querySelector("#abajo2")
// var cerrar = document.querySelector("#arriba2")

// mostrar.addEventListener("click", () =>{
//     document.getElementById("formu3").style.display = "block";
// })
// cerrar.addEventListener("click", () =>{
//     document.getElementById("formu3").style.display = "none";
// })








// var panels = document.querySelector(".fa-chevron-right")

// panels.forEach(panel =>{
//     panel.addEventListener("click", () =>{
//         removeActiveClasses();
//         panel.classList.add("active");
//     })
// })


// function removeActiveClasses(){
//     panels.forEach(panel =>{
//         panel.classList.remove("active")
//     })
// }
