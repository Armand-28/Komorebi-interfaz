// codigo para hacer aparecer y desaparecer el carrito


var aparecerCarrito = document.getElementsByClassName("fa-xmark");

aparecerCarrito.addEventListener("click", () =>{
    document.getElementById("carrito").classList.toggle("active")})