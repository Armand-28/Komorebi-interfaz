// Script para mostrar formularios según el método de pago seleccionado
document.addEventListener("DOMContentLoaded", function() {
    const paymentMethodSelect = document.getElementById("payment-method");
    const paymentForms = document.querySelectorAll(".payment-form");

    paymentMethodSelect.addEventListener("change", function() {
        const selectedMethod = paymentMethodSelect.value;
        paymentForms.forEach(form => {
            form.style.display = "none";
        });

        const selectedForm = document.getElementById(`${selectedMethod}-form`);
        if (selectedForm) {
            selectedForm.style.display = "block";
        }
    });
});
