// codigo para hacer un menu lateral aparecer y desaparecer

var barlat = document.querySelector(".fa-bars");
var cerrar = document.querySelector(".fa-xmark");
// var añadirItem = document.querySelectorAll(".boton-item");

// añadirItem.forEach((item) => {
//   item.addEventListener("click", () => {
//     var contenedor = item.parentElement;
//     var titulo = contenedor.querySelector(".titulo-item");
//     var img = contenedor.querySelector(".img-item");
//     var precio = contenedor.querySelector(".precio-item");

//     var items = document.querySelector(".carrito-items");

//     var exist = false;
//     var guardados = items.querySelectorAll(".carrito-item-titulo");
//     guardados.forEach((e) => {
//       if (e.innerHTML == titulo.innerHTML) {
//         exist = true;
//       }
//     });

//     if (!exist) {
//       var itemHtml = `
//       <div class="carrito-item">
//           <img src="${img.getAttribute("src")}" width="80px" alt="">
//           <div class="carrito-item-detalles">
//               <span class="carrito-item-titulo" data-titulo="${titulo.innerHTML}">${titulo.innerHTML}</span>
//               <span class="carrito-item-precio">${precio.innerHTML}</span>
//           </div>
//           <span class="btn-eliminar">
//               <i class="fa-solid fa-trash"></i>
//           </span>
//       </div>
//       `;

//       items.innerHTML += itemHtml;

//       items.querySelector(`[data-titulo="${titulo.innerHTML}"]`).parentElement.parentElement.querySelector(".btn-eliminar").addEventListener("click", eliminarItemCarrito)

//       var valor = [];
//       var carrito = getCookie("carrito");
//       if (carrito != "") {
//         valor = JSON.parse(carrito);
//       }

//       valor.push({
//         img: img.getAttribute("src"),
//         titulo: titulo.innerHTML,
//         precio: precio.innerHTML
//       })

//       document.cookie = `carrito=${JSON.stringify(valor)}; path=/`;
//     }
//   });
// });

barlat.addEventListener("click", () => {
  document.getElementById("menu").classList.toggle("active");
});

// codigo para salir de el menu
cerrar.addEventListener("click", () => {
  document.getElementById("menu").classList.toggle("active");
});

//  codigo para hacer carrusel de imagenes con js
let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .items');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 3000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 3000);

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};



// boton de ayuda

// var abrir = document.querySelector(".fa-question");
// var cierre = document.querySelector(".fa-circle-xmark");

// abrir.addEventListener("click", () => {
//   document.getElementById("abrir-boton-ayuda").classList.toggle("active");
// });

// cierre.addEventListener("click", () => {
//   document.getElementById("abrir-boton-ayuda").classList.toggle("active");
// });

// modo entrega

var modoEntregaMostrar = document.querySelector(".modoentrega");
var modoEntregaSalir = document.querySelector(".cerrar-modo-entrega");

modoEntregaMostrar.addEventListener("click", () => {
  document.getElementById("modo-entrega").classList.toggle("active");
});

modoEntregaSalir.addEventListener("click", () => {
  document.getElementById("modo-entrega").classList.toggle("active");
});
// click para mostrar las ventanas emergentes//

var verificar = document.querySelector(".recoger-tienda");
var verificarCierre = document.querySelector(".btn-verificar");

verificar.addEventListener("click", () => {
  document.getElementById("modo-entrega").style.display = "none";
  document.getElementById("verificar").style.display = "block";
});

verificarCierre.addEventListener("click", () => {
  document.getElementById("verificar").style.display = "none";
  document.getElementById("modo-entrega").classList.toggle("active");
});
var seguirComprando = document.querySelector("#btn-verificar");

seguirComprando.addEventListener("click", () => {
  document.getElementById("donde-encuentras").style.display = "block";
  document.getElementById("cuadro-seguir").classList.toggle("active");
});

var verificar = document.querySelector(".recoger-domicilio");

verificar.addEventListener("click", () => {
  document.getElementById("verificar").style.display = "block";
  document.getElementById("modo-entrega").style.display = "none";
});
var donEncuentras = document.querySelector("#btn-verificar");

donEncuentras.addEventListener("click", () => {
  document.getElementById("donde-encuentras").classList.toggle("active");
});

var seguir = document.querySelector("#btn-verificar");

seguir.addEventListener("click", () => {
  document.getElementById("donde-encuentras").style.opacity = "1";
  document.getElementById("cuadro-seguir").style.display = "none";
});

var guardar = document.querySelector(".btn-guardar");

guardar.addEventListener("click", () => {
  document.getElementById("donde-encuentras").style.display = "none";
  document.getElementById("cuadro-seguir").style.display = "block";
});

var carritoVisible = document.querySelector(".li-1");





