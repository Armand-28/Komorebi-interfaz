<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo pago</title>
    <link rel="stylesheet" href="metoPago.css">
</head>

<body>
    <div class="container">
        <div class="title">Nombre de producto:</div>
        <div class="center-container">
            <button class="buttone button--icon"><svg width="24" viewBox="0 0 24 24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path>
                </svg></button>
            </button>
            <table>
                <tr class="image-cell">
                    <td><img src="../imagenes/azucar.jpg" alt="Imagen 1"></td>
                    <td>descripcion</td>
                    <td>123</td>
                    <td>Texto de la fila 1</td>
                </tr>
            </table>
        </div>
        <div class="content">Producto | &copy; Copyright - Mi plaza Autoservicio </div>
    </div>
    <div class="infopago">
        <div class="card coupons">
            <label class="title">Aplicar cupones</label>
            <form class="forms">
                <input type="text" placeholder="Aplica tus cupones aquí..." class="input_field">
                <button>Aplicar</button>
            </form>
        </div>
        <div class="card checkout">
            <label class="title">Factura de pedido</label>
            <div class="details">
                <span>Subtotal de su carrito:</span>
                <span>47.99$</span>
                <span>Descuento mediante cupones aplicados:</span>
                <span>3.99$</span>
                <span>Gastos de envío:</span>
                <span>4.99$</span>
            </div>
            <div class="checkout--footer">
                <label class="price">$ 57.99</label>
                <button class="checkout-btn" id="pay-button" type="button">Pagar</button>
            </div>
        </div>
        <div class="card checkouts" id="payment-container" style="display: none;">
            <label class="title">Medios de pago</label>
            <div class="details">
                <form class="form">
                    <label for="01">Bancolombia</label>
                    <input id="01" type="radio" name="r" value="1" checked="">
                    <label for="02">Davivienda</label>
                    <input id="02" type="radio" name="r" value="2">
                    <label for="03">Nequi</label>
                    <input id="03" type="radio" name="r" value="3">
                </form>
                <div class="card-id567">
                    <img id="card-image" src="../imagenes/Bancolombia.jpg" alt="Bancolombia">
                </div>
            </div>
            <div class="checkout--footer">
                <input type="file" accept="image/*" required="" id="file-input">
            </div>
        </div>
    </div>
    </div>
    <script src="metoPago.js"></script>
</body>

</html>