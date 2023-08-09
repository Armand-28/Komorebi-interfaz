// codigo para hacer aparecer y desaparecer el carrito


var aparecerCarrito = document.querySelector("micarrito");

aparecerCarrito.addEventListener("click", () =>{
        document.getElementById("carrito").classList.toggle("active");}
})