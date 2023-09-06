function cerrarSesion(){
  var alerta = confirm("¿Esta seguro de cerrar la sesion?"); 

  if(alerta == true){
    window.location.href = "http://localhost:8080/komorebi-interfaz(1)/interfazUsuario/cerrarSesion.php"; 
  }
}
  
function irInicio(){
  var alertaInicio = confirm("¿Esta seguro de ir a inicio?"); 

  if(alertaInicio == true){
    window.location.href = "http://localhost:8080/komorebi-interfaz(1)/index/index.php"; 
  } 
}  
  
  const links = document.querySelectorAll('.links li a');
  const contents = document.querySelectorAll('.content');

  // Ocultar todo el contenido al cargar la página
  contents.forEach(content => {
    content.style.display = 'none';
  });

  links.forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      const targetContentId = this.getAttribute('data-target');
      contents.forEach(content => content.style.display = 'none'); // Oculta todas las secciones de contenido
      document.getElementById(targetContentId).style.display = 'block'; // Muestra la sección de contenido correspondiente
    });
  });

  document.addEventListener("DOMContentLoaded", function() {
    // Mostrar el contenido de agregar-informacion por defecto
    const defaultContent = document.getElementById("agregar-informacion");
    defaultContent.style.display = "block";
  
    // ... Resto de tu código existente ...
  });
  

  // tabla de informacion de pedido para que se cambie de pagina

  document.addEventListener('DOMContentLoaded', function () {
    const itemsPerPage = 10; // Cambia el número de elementos por página según tu necesidad
  
    // Simulación de datos de la base de datos
    const dataFromDatabase = [
      // ... tus datos aquí ...
    ];
  
    function updateTableContent(page) {
      const tableBody = document.querySelector('tbody');
      tableBody.innerHTML = '';
  
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
  
      for (let i = start; i < end && i < dataFromDatabase.length; i++) {
        const row = dataFromDatabase[i];
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
          <td>${row.nombreProducto}</td>
          <td><img src="${row.imagen}" alt="Imagen"></td>
          <td>${row.categoria}</td>
          <td>${row.precioCompra}</td>
          <td>${row.tiempoEspera}</td>
          <td>${row.horaCompra}</td>
          <td>${row.horaLlegada}</td>
        `;
        tableBody.appendChild(newRow);
      }
    }
  
    updateTableContent(1);
  
    // Implementa la lógica de paginación (prevPage y nextPage)
  });
  
