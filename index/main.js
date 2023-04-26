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

//  codigo para hacer carrusel de imagenes con js
window.addEventListener("load",() =>{
   console.log("la imagen a cargado")

var imagenes = [];

imagenes[0] = "../imagenes/img1.png";
imagenes[1] = "../imagenes/img2.jpg";
imagenes[2] = "../imagenes/img3.jpg";


var indiceImagen = 0;
function cambiarImagen(){
   
   document.automatica.src = imagenes[indiceImagen];

   if(indiceImagen < 2){
      indiceImagen++;

   }else{
      indiceImagen = 0;
   }

}
setInterval(cambiarImagen, 3500);

});




var carrusel = ["../imagenes/img1.png","../imagenes/img2.jpg","../imagenes/img3.jpg"],
cont = 0;

function imagenes(carruseles){
      carruseles.addEventListener("click", e =>{
            var atras = carruseles.querySelector(".fa-arrow-left"),
                adelante = carruseles.querySelector(".fa-arrow-right"),
               img = carruseles.querySelector(".imagen"),
               targ = e.target;
   
            if(targ == atras){
               if(cont > 0){
                  img.src = carrusel[cont - 1];
                  cont--;
               } else{
                  img.src = carrusel[carrusel.length - 1];
                  cont = carrusel.length - 1;
               }
            }
            else if(targ == adelante){
               if(cont < carrusel.length - 1){
                  img.src = carrusel[cont + 1];
                  cont++;
               } else{
                  img.src = carrusel[0];
                  cont = 0;
               }   
            }
      });

   }
   document.addEventListener("DOMContentLoaded", () =>{
         var carrusel = document.querySelector(".carrusel");
      
          imagenes(carrusel)
      });
   
var abrir = document.querySelector(".fa-question")
var cierre = document.querySelector(".fa-circle-xmark")


abrir.addEventListener("click", () =>{
   document.getElementById("abrir-boton-ayuda").classList.toggle("active")
})

cierre.addEventListener("click", () =>{
   document.getElementById("abrir-boton-ayuda").classList.toggle("active")
})


var carrito = document.querySelector(".carrito-compras");
var cerrar = document.querySelector(".cerrar-carrito");

carrito.addEventListener("click", () =>{
   document.getElementById("carrito").classList.toggle("active");
});
cerrar.addEventListener("click", () =>{
   document.getElementById("carrito").classList.toggle("active");
})




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
   document.getElementById("verificar").style.display = "block";
})

verificarCierre.addEventListener("click", () =>{
   document.getElementById("verificar").style.display = "none";
   document.getElementById("modo-entrega").classList.toggle("active");
})
var seguirComprando = document.querySelector(".btn-verificar");

seguirComprando.addEventListener("click", () =>{
   document.getElementById("cuadro-seguir").classList.toggle("active")
})

var verificar = document.querySelector(".recoger-domicilio");

verificar.addEventListener("click", () =>{
   document.getElementById("verificar").style.display = "block";
})







// function imagenes(carruseles){
//    carruseles.addEventListener("click", e =>{
//          var atras = carruseles.querySelector(".fa-arrow-left"),
//              adelante = carruseles.querySelector(".fa-arrow-right"),
//             img = carruseles.querySelector("img"),
//             targ = e.target;

//          if(targ == atras){
//             if(cont > 0){
//                img.src = carrusel[cont - 1];
//                cont--;
//             } else{
//                img.src = carrusel[carrusel.length - 1];
//                cont = carrusel.length - 1;
//             }
//          }
//          else if(targ == adelante){
//             if(cont < carrusel.length - 1){
//                img.src = carrusel[cont + 1];
//                cont++;
//             } else{
//                img.src = carrusel[0];
//                cont = 0;
//             }   
//          }

//    });
// }
// document.addEventListener("DOMContentLoaded", () =>{
//    var carrusel = document.querySelector(".carrusel");

//    imagenes(carrusel)
// });






 

// let menu = document.querySelector(".fa-bars")

// menu.addEventListener("click", () =>{
//     document.getElementById("menu").classList.toggle("active")
    
// })