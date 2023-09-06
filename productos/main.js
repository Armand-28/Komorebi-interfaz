const links = document.querySelectorAll(".lines a");
const contentBoxes = document.querySelectorAll(".content");

links.forEach(link => {
  link.addEventListener("click", (event) => {
    event.preventDefault();
    const contentId = link.getAttribute("data-content");
    
    contentBoxes.forEach(contentBox => {
      contentBox.style.display = "none";
    });
    
    const selectedContent = document.getElementById(contentId);
    selectedContent.style.display = "block";
  });
});

// cambio de colore rojo y que se quede al cambiar de categoria
document.addEventListener("DOMContentLoaded", function() {
  const links = document.querySelectorAll(".lines a");

  links.forEach(link => {
    link.addEventListener("click", function(event) {
      event.preventDefault();

      // Eliminar la clase 'active' de todos los enlaces
      links.forEach(link => {
        link.classList.remove("active");
      });

      // Agregar la clase 'active' al enlace clicado
      this.classList.add("active");
    });
  });
});

// hacer la paginacion

document.addEventListener('DOMContentLoaded', function () {
  const itemsPerPage = 3; // Número de elementos por página
  const categories = ['refrigerados', 'snacks']; // Agrega las demás categorías aquí

  categories.forEach(category => {
    let currentPage = 1;

    const itemContainer = document.getElementById(`${category}-container`);
    const items = itemContainer.querySelectorAll('.item');

    function showItems(page) {
      items.forEach((item, index) => {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage - 1;

        if (index >= start && index <= end) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }

    showItems(currentPage);

    const prevPageButton = document.querySelector(`#${category} .prevPage`);
    const nextPageButton = document.querySelector(`#${category} .nextPage`);
    const currentPageSpan = document.querySelector(`#${category} .currentPage`);

    prevPageButton.addEventListener('click', () => {
      if (currentPage > 1) {
        currentPage--;
        showItems(currentPage);
        currentPageSpan.textContent = `Página ${currentPage}`;
      }
    });

    nextPageButton.addEventListener('click', () => {
      const totalPages = Math.ceil(items.length / itemsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        showItems(currentPage);
        currentPageSpan.textContent = `Página ${currentPage}`;
      }
    });
  });
});

// seccion js de carrito de compras

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
var carritoVisible = false;

//Espermos que todos los elementos de la pàgina cargen para ejecutar el script
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready();
}

function ready(){

    var carrito = getCookie("carrito") !== "" ? JSON.parse(getCookie("carrito")) : [];
    carrito.forEach(element => {
        agregarItemAlCarrito(element.titulo, element.precio, element.imagenSrc, false);
    });
    
    //Agregremos funcionalidad a los botones eliminar del carrito
    var botonesEliminarItem = document.getElementsByClassName('btn-eliminar');
    for(var i=0;i<botonesEliminarItem.length; i++){
        var button = botonesEliminarItem[i];
        button.addEventListener('click',eliminarItemCarrito);
    }

    console.log(botonesEliminarItem)

    //Agrego funcionalidad al boton sumar cantidad
    var botonesSumarCantidad = document.getElementsByClassName('sumar-cantidad');
    for(var i=0;i<botonesSumarCantidad.length; i++){
        var button = botonesSumarCantidad[i];
        button.addEventListener('click',sumarCantidad);
    }

     //Agrego funcionalidad al buton restar cantidad
    var botonesRestarCantidad = document.getElementsByClassName('restar-cantidad');
    for(var i=0;i<botonesRestarCantidad.length; i++){
        var button = botonesRestarCantidad[i];
        button.addEventListener('click',restarCantidad);
    }

    //Agregamos funcionalidad al boton Agregar al carrito
    var botonesAgregarAlCarrito = document.getElementsByClassName('boton-item');
    for(var i=0; i<botonesAgregarAlCarrito.length;i++){
        var button = botonesAgregarAlCarrito[i];
        button.addEventListener('click', agregarAlCarritoClicked);
    }

    //Agregamos funcionalidad al botón comprar
    document.getElementsByClassName('btn-pagar')[0].addEventListener('click',pagarClicked)
}
//Eliminamos todos los elementos del carrito y lo ocultamos
function pagarClicked(){
    alert("Gracias por la compra");
    //Elimino todos los elmentos del carrito
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
    while (carritoItems.hasChildNodes()){
        carritoItems.removeChild(carritoItems.firstChild)
    }
    actualizarTotalCarrito();
    ocultarCarrito();
}
//Funciòn que controla el boton clickeado de agregar al carrito
function agregarAlCarritoClicked(event){
    var button = event.target;
    var item = button.parentElement;
    var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
    var precio = item.getElementsByClassName('precio-item')[0].innerText;
    var imagenSrc = item.getElementsByClassName('img-item')[0].src;
    console.log(imagenSrc);

    agregarItemAlCarrito(titulo, precio, imagenSrc);

    hacerVisibleCarrito();
}

//Funcion que hace visible el carrito
function hacerVisibleCarrito(){
    carritoVisible = true;
    var carrito = document.getElementsByClassName('carrito')[0];
    carrito.style.marginRight = '0';
    carrito.style.opacity = '1';
    carrito.style.display = "block"

    var items =document.getElementsByClassName('contenedor-items')[0];
    items.style.width = '100%';
}

//Funciòn que agrega un item al carrito
function agregarItemAlCarrito(titulo, precio, imagenSrc){
    var item = document.createElement('div');
    item.classList.add = ('item');
    var itemsCarrito = document.getElementsByClassName('carrito-items')[0];

    //controlamos que el item que intenta ingresar no se encuentre en el carrito
    var nombresItemsCarrito = itemsCarrito.getElementsByClassName('carrito-item-titulo');

    for(var i=0;i < nombresItemsCarrito.length;i++){
        if(nombresItemsCarrito[i].innerText==titulo){
            alert("El item ya se encuentra en el carrito");
            return;
        }
    }

    var itemCarritoContenido = `
        <div class="carrito-item">
            <img src="${imagenSrc}" width="80px" alt="">
            <div class="carrito-item-detalles">
                <span class="carrito-item-titulo">${titulo}</span>
                <div class="selector-cantidad">
                    <i class="fa-solid fa-minus restar-cantidad"></i>
                    <input type="text" value="1" class="carrito-item-cantidad" disabled>
                    <i class="fa-solid fa-plus sumar-cantidad"></i>
                </div>
                <span class="carrito-item-precio">${precio}</span>
            </div>
            <button class="btn-eliminar">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    `
    item.innerHTML = itemCarritoContenido;
    itemsCarrito.append(item);

    //Agregamos la funcionalidad eliminar al nuevo item
     item.getElementsByClassName('btn-eliminar')[0].addEventListener('click', eliminarItemCarrito);

    //Agregmos al funcionalidad restar cantidad del nuevo item
    var botonRestarCantidad = item.getElementsByClassName('restar-cantidad')[0];
    botonRestarCantidad.addEventListener('click',restarCantidad);

    //Agregamos la funcionalidad sumar cantidad del nuevo item
    var botonSumarCantidad = item.getElementsByClassName('sumar-cantidad')[0];
    botonSumarCantidad.addEventListener('click',sumarCantidad);

    //Actualizar carrito en la cookie
    if (esNuevo) {
        var carrito = getCookie("carrito") !== "" ? JSON.parse(getCookie("carrito")) : [];
        carrito.push({
            titulo: titulo,
            imagenSrc: imagenSrc,
            precio: precio
        })
        document.cookie = `carrito=${JSON.stringify(carrito)};path=/`
    }

    //Actualizamos total
    actualizarTotalCarrito();
}
//Aumento en uno la cantidad del elemento seleccionado
function sumarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
    var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
    cantidadActual++;
    selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
    actualizarTotalCarrito();
}
//Resto en uno la cantidad del elemento seleccionado
function restarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
    var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
    cantidadActual--;
    if(cantidadActual>=1){
        selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
        actualizarTotalCarrito();
    }
}

//Elimino el item seleccionado del carrito
function eliminarItemCarrito(event){
    var buttonClicked = event.target;
    var item = buttonClicked.parentElement.parentElement;
    var carrito = getCookie("carrito") !== "" ? JSON.parse(getCookie("carrito")) : [];

    carrito.forEach((element, indice) => {
        var titulo = item.querySelector(".carrito-item-titulo").innerHTML
        if (element.titulo == titulo) {
            carrito.splice(indice, 1);
        }
    });

    item.remove();
    document.cookie = `carrito=${JSON.stringify(carrito)};path=/`
    //Actualizamos el total del carrito
    actualizarTotalCarrito();

    //la siguiente funciòn controla si hay elementos en el carrito
    //Si no hay elimino el carrito
}
//Funciòn que controla si hay elementos en el carrito. Si no hay oculto el carrito.
function ocultarCarrito(){
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
        var carrito = document.getElementsByClassName('carrito')[0];
        carrito.style.marginRight = '-100%';
        carrito.style.opacity = '0';
        carritoVisible = false;
    
        var items =document.getElementsByClassName('contenedor-items')[0];
        items.style.width = '100%';
}
//Actualizamos el total de Carrito
function actualizarTotalCarrito(){
    //seleccionamos el contenedor carrito
    var carritoContenedor = document.getElementsByClassName('carrito')[0];
    var carritoItems = carritoContenedor.getElementsByClassName('carrito-item');
    var total = 0;
    //recorremos cada elemento del carrito para actualizar el total
    for(var i=0; i< carritoItems.length;i++){
        var item = carritoItems[i];
        var precioElemento = item.getElementsByClassName('carrito-item-precio')[0];
        //quitamos el simobolo peso y el punto de milesimos.
        var precio = parseFloat(precioElemento.innerText.replace('$','').replace('.',''));
        var cantidadItem = item.getElementsByClassName('carrito-item-cantidad')[0];
        console.log(precio);
        var cantidad = cantidadItem.value;
        total = total + (precio * cantidad);
    }
    total = Math.round(total * 100)/100;

    document.getElementsByClassName('carrito-precio-total')[0].innerText = '$'+total.toLocaleString("es") + ",00";

}