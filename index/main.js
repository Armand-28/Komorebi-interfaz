// codigo para hacer un menu lateral aparecer y desaparecer

var barlat = document.querySelector(".fa-bars");
var cerrar = document.querySelector(".fa-xmark");

barlat.addEventListener("click", () => {
  document.getElementById("menu").classList.toggle("active");
});

// codigo para salir de el menu
cerrar.addEventListener("click", () => {
  document.getElementById("menu").classList.toggle("active");
});

//  codigo para hacer carrusel de imagenes con js
window.addEventListener("load", () => {
  console.log("la imagen a cargado");

  var imagenes = [];

  imagenes[0] = "../imagenes/carrucel2.jpg";
  imagenes[1] = "../imagenes/carrusel.jpg";
  imagenes[2] = "../imagenes/carrucel3.jpg";

  var indiceImagen = 0;
  function cambiarImagen() {
    document.automatica.src = imagenes[indiceImagen];

    if (indiceImagen < 2) {
      indiceImagen++;
    } else {
      indiceImagen = 0;
    }
  }
  setInterval(cambiarImagen, 3500);
});

var carrusel = [
    "../imagenes/carrucel2.jpg",
    "../imagenes/carrusel.jpg",
    "../imagenes/carrucel3.jpg",
  ],
  cont = 0;

function imagenes(carruseles) {
  carruseles.addEventListener("click", (e) => {
    var atras = carruseles.querySelector(".fa-arrow-left"),
      adelante = carruseles.querySelector(".fa-arrow-right"),
      img = carruseles.querySelector(".imagen"),
      targ = e.target;

    if (targ == atras) {
      if (cont > 0) {
        img.src = carrusel[cont - 1];
        cont--;
      } else {
        img.src = carrusel[carrusel.length - 1];
        cont = carrusel.length - 1;
      }
    } else if (targ == adelante) {
      if (cont < carrusel.length - 1) {
        img.src = carrusel[cont + 1];
        cont++;
      } else {
        img.src = carrusel[0];
        cont = 0;
      }
    }
  });
}
document.addEventListener("DOMContentLoaded", () => {
  var carrusel = document.querySelector(".carrusel");

  imagenes(carrusel);
});

// boton de ayuda

var abrir = document.querySelector(".fa-question");
var cierre = document.querySelector(".fa-circle-xmark");

abrir.addEventListener("click", () => {
  document.getElementById("abrir-boton-ayuda").classList.toggle("active");
});

cierre.addEventListener("click", () => {
  document.getElementById("abrir-boton-ayuda").classList.toggle("active");
});

// carrito de compras

var carrito = document.querySelector(".carrito-compras");
var cerrar = document.querySelector(".cerrar-carrito");

carrito.addEventListener("click", () => {
  document.getElementById("carrito").classList.toggle("active");
});
cerrar.addEventListener("click", () => {
  document.getElementById("carrito").classList.toggle("active");
});

// funcionalidad al carrito de compras

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

// funcionalidad carrito de compras

// variable que mantiene el estado visible del carrito

var carritoVisible = false;

// esperamos que todos los elementos de la pagina se carguen para continuar con el script

if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

function ready() {
  // agregamops funcionalidad a los botones eliminar del carrito
  var botonEliminarItem = document.getElementsByClassName("btn-eliminar");
  for (var i = 0; i < botonEliminarItem.length; i++) {
    var button = botonEliminarItem[i];
    button.addEventListener("click", eliminarItemCarrito);
  }
  // agregar funcionalidad al boton de sumar cantidad
  var botonesSumarCantidad = document.getElementsByClassName("sumar-cantidad");
  for (var i = 0; i < botonesSumarCantidad.length; i++) {
    var button = botonesSumarCantidad[i];
    button.addEventListener("click", sumarCantidad);
  }

  // agregar funcionalidad al boton de restar cantidad
  var botonesRestarCantidad =
    document.getElementsByClassName("restar-cantidad");
  for (var i = 0; i < botonesRestarCantidad.length; i++) {
    var button = botonesRestarCantidad[i];
    button.addEventListener("click", restarCantidad);
  }
  // agrego funcionalidad a los botones de agregar al carrito

  var botonesAgregarAlCarrito = document.getElementsByClassName("boton-item");

  for (var i = 0; i < botonesAgregarAlCarrito.length; i++) {
    var button = botonesAgregarAlCarrito[i];
    button.addEventListener("click", agregarAlCarritoClicked);
  }
}

// elimina el item seleccionado del carrito

function eliminarItemCarrito(event) {
  var buttonCliked = event.target;
  buttonCliked.parentElement.remove();

  // Actualizamos el total del carriro una vez que hemos eliminado un item
  actualizarTotalCarrito();

  // la siguinte funcion controla si hay elelmentos en el carrito una vez que se elimino
  //si no hay debo ocultar el carrito

  ocultarCarrito();
}

//Actualiza el total del carrito
function actualizarTotalCarrito() {
  //seleccionamos el contenedor carrito

  var carritoContenedor = document.getElementsByClassName("carrito")[0];
  var carritoItems = carritoContenedor.getElementsByClassName("carrito-item");
  var total = 0;

  //recorremos cada elemento del carrito para actualizar el total
  for (let i = 0; i < carritoItems.length; i++) {
    var item = carritoItems[i];
    var precioElemento = item.getElementsByClassName("carrito-item-precio")[0];
    console.log(precioElemento);

    // quitamos el simbolo de peso y el punto de milisimo

    var precio = parseFloat(
      precioElemento.innerText.replace("$", "").replace(".", "")
    );
    console.log(precio);

    var cantidadItem = item.getElementsByClassName("carrito-item-cantidad")[0];
    var cantidad = cantidadItem.value;
    console.log(cantidad);
    total = total + precio * cantidad;
  }
  total = Math.round(total * 100) / 100;
  document.getElementsByClassName("carrito-precio-total")[0].innerText =
    "$" + total.toLocaleString("es") + ",00";
}

function ocultarCarrito() {
  var carritoItems = document.getElementsByClassName("carrito-items")[0];
  if (carritoItems.childElementCount == 0) {
    var carriro = document.getElementsByClassName("carrito")[0];
    carrito.style.marginRight = "-100%";
    carriro.style.opacity = "0";
    carriroVisible = false;

    //ahora maximizo el contenedor de los elementos

    var items = document.getElementsByClassName("contenedor-cuadros")[0];
    items.style.width = "100%";
  }
}

// aumento en uno la cantidad del elemento seleccionado

function sumarCantidad(event) {
  var buttonCliked = event.target;
  var selector = buttonCliked.parentElement;
  var cantidadActual = selector.getElementsByClassName(
    "carrito-item-cantidad"
  )[0].value;
  console.log(cantidadActual);
  cantidadActual++;
  selector.getElementsByClassName("carrito-item-cantidad")[0].value = cantidadActual;

  // actualizamos el total del precio
  actualizarTotalCarrito();
}

function restarCantidad(event) {
  var buttonCliked = event.target;
  var selector = buttonCliked.parentElement;
  var cantidadActual = selector.getElementsByClassName("carrito-item-cantidad")[0].value;
  console.log(cantidadActual);
  cantidadActual--;

  // controlamos que no sea menor que 1

  if (cantidadActual >= 1) {
    selector.getElementsByClassName("carrito-item-cantidad")[0].value = cantidadActual;
    //actualizamos el total
    actualizarTotalCarrito();
  }
   
}

function agregarAlCarritoClicked(event){
  var button = event.target;
  var item = button.parentElement;
  var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
  console.log(titulo);
  var precio = item.getElementsByClassName('precio-item')[0].innerText;
  var imagenSrc = item.getElementsByClassName('img-item')[0].innerText;
  console.log(imagenSrc); 


  //la siguiente funcion agrega los elementos al carrito le mando por parametros los valores.
  agregarItemAlCarrito(titulo, precio, imagenSrc);
}

function agregarItemAlCarrito(titulo, precio, imagenSrc) {
  var item = document.createElement('div');
  item.classList.add = 'item';
  var itemsCarrito = document.getElementsByClassName('carrito-items')[0];

// vamos a controlar que el item que esta ingreasando no se encuentra ya en el carrito
var nombresItemCarrito = itemsCarrito.getElementsByClassName('titulo-item');
for (var i = 0; i < nombresItemCarrito.length; i++) {
  if (nombresItemCarrito[i].innerText==titulo) {
    alert('El item ya s encuentra en el carrito'); 
    return;
    
  }
}

var itemCarritoContenido =
 `
<div class="carrito-item">
            <img src="../imagenes/papel.jpg" alt="" width="80px">
            <div class="carrito-item-detalles">
              <span class="carrito-item-titulo">Papel higienico</span>
              <div class="selector-cantidad">
                <i class="fa-solid fa-minus restar restar-cantidad"></i>
                <input
                  type="text"
                  value="1"
                  class="carrito-item-cantidad" disabled/>
                <i class="fa-solid fa-plus sumar-cantidad"></i>
              </div>
              <span class="carrito-item-precio">$ 10.000</span>
            </div>
            <span class="btn-eliminar">
              <i class="fa-solid fa-trash"></i>
            </span>
          </div>

`
item.innerHTML = itemCarritoContenido;
itemsCarrito.append(item);
}









