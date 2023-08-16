
      <!-- carrucel de imagenes-->
      <br>
      <div class="container w-75">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/images/carrucel2.jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/images/carrucel3.jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/carrusel.jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

        <!-- Promociones -->
        
          <br>
          <a href="" class="titulo-promociones">Promociones</a>

          <!-- Contenedor de elementos -->
          <section class="contenedor">
          <div class="contenedor-items">
              <div class="item">
                  <span class="titulo-item">Papel Higuienico</span>
                  <img src="assets\images\papel.jpg" alt="" class="img-item">
                  <span class="precio-item">$15.000</span>
                  <p>Docena (10 x unidad)</p>
                  <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
              </div>
              <div class="item">
                  <span class="titulo-item">Jabón</span>
                  <img src="assets/images/jabon.jpg" alt="" class="img-item">
                  <span class="precio-item">$25.000</span>
                  <p>Docena (10 x unidad)</p>
                  <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
              </div>
              <div class="item">
                  <span class="titulo-item">Pañuelos</span>
                  <img src="assets/images/pañuelos.jpg" alt="" class="img-item">
                  <span class="precio-item">$35.000</span>
                  <p>Docena (10 x unidad)</p>
                  <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
              </div>
              <div class="item">
                  <span class="titulo-item">Arveja</span>
                  <img src="assets/images/arveja.png" alt="" class="img-item">
                  <span class="precio-item">$18.000</span>
                  <p>Docena (10 x unidad)</p>
                  <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
              </div>
              <div class="item">
                <span class="titulo-item">Papel Higuienico</span>
                <img src="assets\images\papel.jpg" alt="" class="img-item">
                <span class="precio-item">$15.000</span>
                <p>Docena (10 x unidad)</p>
                <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="item">
                <span class="titulo-item">Jabón</span>
                <img src="assets/images/jabon.jpg" alt="" class="img-item">
                <span class="precio-item">$25.000</span>
                <p>Docena (10 x unidad)</p>
                <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="item">
                <span class="titulo-item">Pañuelos</span>
                <img src="assets/images/pañuelos.jpg" alt="" class="img-item">
                <span class="precio-item">$35.000</span>
                <p>Docena (10 x unidad)</p>
                <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="item">
                <span class="titulo-item">Arveja</span>
                <img src="assets/images/arveja.png" alt="" class="img-item">
                <span class="precio-item">$18.000</span>
                <p>Docena (10 x unidad)</p>
                <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="item">
              <span class="titulo-item">Cereal</span>
              <img src="assets/images/arveja.png" alt="" class="img-item">
              <span class="precio-item">$18.000</span>
              <p>Docena (10 x unidad)</p>
              <button class="boton-item">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
          </div>
      </section>
      
       <!-- Carrito de Compras -->
       <div class="carrito" id="carrito">
        <div class="header-carrito">
            <h2>Carrito de Compras</h2>
            <p><i class="fa-solid fa-xmark"onclick="ocultarCarrito();"></i></p>
        </div>

        <div class="carrito-items">
            <!-- 
            <div class="carrito-item">
                <img src="img/boxengasse.png" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">Box Engasse</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$15.000,00</span>
                </div>
               <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
               </span>
            </div>
            <div class="carrito-item">
                <img src="img/skinglam.png" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">Skin Glam</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="3" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$18.000,00</span>
                </div>
               <button class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
               </button>
            </div>
             -->
        </div>
        <div class="carrito-total">
            <div class="fila">
                <strong>Tu Total</strong>
                <span class="carrito-precio-total">
                    $00,00
                </span>
            </div>
            <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
        </div>
    </div>

    <footer>
      <div class="container__footer">
          <div class="box__footer">
              <div class="logo">
                  <img src="assets/images/logo rojo.png" alt="">
              </div>
              <div class="terms">
                <p>Plaza autoservicios S.A.S NIT 123 321 1234.
                  <p>Direccion:Oficina central, Calle 8 # 12a-44, Bogotá</p>
                  <p>Lunes a Viernes de 7:00 am a 4:45 pm</p>
                  plaza-autoservicios@gmail.com
                  </p>
              </div>
          </div>
          <div class="box__footer">
            <h2>Atención al Cliente</h2>
            <a href="#">Peticiones,Quejas y Reclamos</a>
            <a href="#">Preguntas frecuentes</a>
            <a href="#">Oportunidades de empleo</a>
            <a href="#">Tendencia</a>
        </div>

        <div class="box__footer">
            <h2>Compañia</h2>
            <a href="view/nosotros/nosotros.html">Acerca de nosotros</a>
            <a href="#">Politica & privacidad</a>
            <a href="#">Procesos</a>
            <a href="#">Servicios</a>              
        </div>

          <div class="box__footer">
            <h2>Redes Sociales</h2>
            <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
            <a href="#"><i class="fab fa-youtube"></i> Youtube</a>
            <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
          </div>

      </div>

      <div class="box__copyright">
          <hr>
          <p>Todos los derechos reservados © 2023 </p>
      </div>
  </footer>   

      </div> <!-- container -->

     

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Scripts Js-->
    <script src="assets/js/indexHelper.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>