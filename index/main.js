// codigo para hacer un menu lateral aparecer y desaparecer

var barlat = document.querySelector(".fa-bars");
var cerrar = document.querySelector(".fa-xmark");
var añadirItem = document.querySelectorAll(".boton-item");

añadirItem.forEach((item) => {
  item.addEventListener("click", () => {
    var contenedor = item.parentElement;
    var titulo = contenedor.querySelector(".titulo-item");
    var img = contenedor.querySelector(".img-item");
    var precio = contenedor.querySelector(".precio-item");

    var items = document.querySelector(".carrito-items");

    var exist = false;
    var guardados = items.querySelectorAll(".carrito-item-titulo");
    guardados.forEach((e) => {
      if (e.innerHTML == titulo.innerHTML) {
        exist = true;
      }
    });

    if (!exist) {
      var itemHtml = `
      <div class="carrito-item">
          <img src="${img.getAttribute("src")}" width="80px" alt=""> 
          <div class="carrito-item-detalles">
              <span class="carrito-item-titulo" data-titulo="${titulo.innerHTML}">${titulo.innerHTML}</span>
              <span class="carrito-item-precio">${precio.innerHTML}</span>
          </div>
          <span class="btn-eliminar">
              <i class="fa-solid fa-trash"></i>
          </span>
      </div>
      `;

      items.innerHTML += itemHtml;
      
      items.querySelector(`[data-titulo="${titulo.innerHTML}"]`).parentElement.parentElement.querySelector(".btn-eliminar").addEventListener("click", eliminarItemCarrito)

      var valor = [];
      var carrito = getCookie("carrito");
      if (carrito != "") {
        valor = JSON.parse(carrito);
      }
      
      valor.push({
        img: img.getAttribute("src"),
        titulo: titulo.innerHTML,
        precio: precio.innerHTML
      })

      document.cookie = `carrito=${JSON.stringify(valor)}; path=/`;
    }
  });
});

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

  imagenes[1] = "../imagenes/carrucel2.jpg";
  imagenes[0] = "../imagenes/carrusel.jpg";
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

//Variable que mantiene el estado visible del carrito

var carritoVisible = false;

// Esperamos que todos los elementos de la pagina se carguen para continuar con el script

if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

function ready() {
  // agregamos funcionalidad a los botones eliminar del carrito
  var botonesEliminarItem = document.getElementsByClassName("btn-eliminar");
  for (var i = 0; i < botonesEliminarItem.length; i++) {
    var button = botonesEliminarItem[i];
    button.addEventListener("click", eliminarItemCarrito);
  }
}

//Elimino el item selecionado del carrito

function eliminarItemCarrito(event) {
  var item = event.target.parentElement;
  var contenedor = item.parentElement;
  item.remove();

  setTimeout(() => {    
    var valor = [];
    var todo = contenedor.querySelectorAll(".carrito-item");
    todo.forEach(e => {
      var img = e.querySelector("img")
      var titulo = e.querySelector(".carrito-item-titulo")
      var precio = e.querySelector(".carrito-item-precio")

      valor.push({
        img: img.getAttribute("src"),
        titulo: titulo.innerHTML,
        precio: precio.innerHTML
      })
    })

    document.cookie = `carrito=${JSON.stringify(valor)}; path=/`;
  }, 100)

  //actualizamos el total del carrito una vez que hemos eliminado un item

  actualizarTotalCarrito();
}

function actualizarTotalCarrito() {
  // seleccionamos el contenedor del carrito
  var carritoContenedor = document.getElementsByClassName("carrito")[0];
  var carritoItems = carritoContenedor.getElementsByClassName("carrito-item");
  var total = 0;

  // recorremos cada elemento del carrito para actualizar el total
  for (var i = 0; i < carritoItems.length; i++) {
    var item = carritoItems[i];
    var precioElemento = item.getElementsByClassName("carrito-item-precio")[0];
    // console.log(precioElemento);
    //quitamos el simbolo de pesos y el punto de milesimo
    var precio = parseFloat(
      precioElemento.innerText.replace("$", "").replace(".", "")
    );
    // console.log(precio);
  }
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

(() => {
  var carritoGuardado = JSON.parse(getCookie("carrito"));
  var items = document.querySelector(".carrito-items");
  carritoGuardado.forEach(e => {
    var itemHtml = `
    <div class="carrito-item">
        <img src="${e.img}" width="80px" alt=""> 
        <div class="carrito-item-detalles">
            <span class="carrito-item-titulo">${e.  titulo}</span>
            <span class="carrito-item-precio">${e.  precio}</span>
        </div>
        <span class="btn-eliminar">
            <i class="fa-solid fa-trash"></i>
        </span>
    </div>
    `;

    items.innerHTML += itemHtml;

    
  })

  ready();
  
})()