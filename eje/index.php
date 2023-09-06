<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Métodos de Pago</title>
</head>
<body>
    <div class="payment-container">
        <select id="payment-method">
            <option value="credit-card">Tarjeta de Crédito</option>
            <option value="paypal">PayPal</option>
            <option value="bank-transfer">Transferencia Bancaria</option>
        </select>

        <div class="payment-form" id="credit-card-form">
            <h2>Tarjeta de Crédito</h2>
            <form>
                <!-- Campos para tarjeta de crédito -->
            </form>
        </div>

        <div class="payment-form" id="paypal-form">
            <h2>PayPal</h2>
            <form>
                <!-- Campos para PayPal -->
            </form>
        </div>

        <div class="payment-form" id="bank-transfer-form">
            <h2>Transferencia Bancaria</h2>
            <form>
                <!-- Campos para transferencia bancaria -->
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
