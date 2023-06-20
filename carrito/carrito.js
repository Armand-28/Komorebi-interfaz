// Obtener los elementos del DOM
const productos = document.querySelectorAll('.producto');
const carrito = document.querySelector('.carrito');

// Recorrer los productos y agregar eventos a los botones
productos.forEach((producto) => {
    const botonAgregar = producto.querySelector('.agregar');
    const inputCantidad = producto.querySelector('input[type="number"]');
    
    botonAgregar.addEventListener('click', () => {
        const titulo = producto.querySelector('h3').textContent;
        const precio = parseInt(producto.querySelector('p').textContent.replace('$', ''));
        const cantidad = parseInt(inputCantidad.value);
        
        if (cantidad > 0) {
            agregarAlCarrito(titulo, precio, cantidad);
            inputCantidad.value = 0;
        }
    });
});

// Función para agregar un producto al carrito
function agregarAlCarrito(titulo, precio, cantidad) {
    const productoEnCarrito = document.createElement('li');
    productoEnCarrito.innerHTML = `
        ${titulo} - $${precio} x ${cantidad}
        <button class="eliminar">Eliminar</button>
    `;

    const botonEliminar = productoEnCarrito.querySelector('.eliminar');
    botonEliminar.addEventListener('click', () => {
        productoEnCarrito.remove();
    });

    carrito.appendChild(productoEnCarrito);
}
