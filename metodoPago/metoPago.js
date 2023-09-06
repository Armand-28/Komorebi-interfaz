document.addEventListener("DOMContentLoaded", function() {
    const payButton = document.getElementById("pay-button");
    const paymentContainer = document.getElementById("payment-container");
    const checkoutContainer = document.querySelector(".checkout");
    
    payButton.addEventListener("click", function() {
        // Mostrar el contenedor de factura de pedido
        checkoutContainer.style.display = "block";
        // Mostrar el contenedor de medios de pago
        paymentContainer.style.display = "block";
    });
});


// medios de pago 

document.addEventListener("DOMContentLoaded", function () {
    // Obtener referencias a los elementos HTML relevantes
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const cardImage = document.getElementById("card-image");

    // Escuchar eventos de cambio en los radio buttons
    radioButtons.forEach((radioButton) => {
        radioButton.addEventListener("change", function () {
            // Cambiar la imagen de la tarjeta según el valor seleccionado
            if (radioButton.value === "1") {
                cardImage.src = "../imagenes/Bancolombia.jpg"; // Ruta de la imagen de Bancolombia
                cardImage.alt = "Bancolombia";
            } else if (radioButton.value === "2") {
                cardImage.src = "../imagenes/QrDavivienda.png"; // Ruta de la imagen de Davivienda
                cardImage.alt = "Davivienda";
            } else if (radioButton.value === "3") {
                cardImage.src = "../imagenes/QrNequi.png"; // Ruta de la imagen de Nequi
                cardImage.alt = "Nequi";
            }
        });
    });
});
