<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Komorebi</title>
    <?php echo (isset($style)) ? $style : "" ?>
    <script src="https://kit.fontawesome.com/96f9a4100d.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <!-- Header 1 de la pagina-->
      <header>
        <p><i class="fa-sharp fa-solid fa-phone"></i></p>
        <p><i class="fa-solid fa-user"></i></p>
        <p><i class="fa-solid fa-message"></i></p>
      </header>
      <!-- header 2 de la pagina  --> 
      <header class="navegacion">
        <p><i class="fa-solid fa-bars"></i></p>
        <p>
          <a href="../index/index.html"
            ><img src="../imagenes/logo blanco index.png" alt=""
          /></a>
        </p>
        <input type="search" placeholder="¿Que buscas hoy?" /><span
          ><i class="fa-solid fa-magnifying-glass"></i
        ></span>
        <!-- Carrito -->
        <p class="carro"><i class="fa-solid fa-cart-shopping carrito-compras"></i></p>
        <p>
          <li class="li-1"><a href="#">Mi carrito</a></li>
        </p>
        <!-- Cuenta -->
        <p class="cuenta">
          <a href="../login/logica/view/index.html"
            ><i class="fa-solid fa-circle-user"></i></a>
        </p>
        <li class="li-2"><a href="../login/login.html">Mi cuenta</a></li>
        <!-- Admin -->
        <p class="admin">
          <a href="../panel-admin/includes/sesion/login.php"
            ><i class="fa-solid fa-user-gear user-admin"></i></a>
        </p>
        <li class="li-3"><a href="../panel-admin/includes/sesion/login.php">Admin</a></li>
        <!-- modo entrega -->
        <div>
          <p class="modoentrega">
            <i class="fa-sharp fa-solid fa-shop"></i
            ><a href="#">Modo de entrega</a>
          </p>
          <p class="quienessomos">
            <a href="../nosotros/nosotros.html"
              ><i class="fa-solid fa-store"></i> ¿Quienes somos?</a
            >
          </p>
        </div>
      </header>
      <!-- menu desplegable-->
      <div id="menu">
        <ul>
          <p><i class="fa-sharp fa-solid fa-xmark"></i></p>
          <li><a href="../productos/productos.html"> Resfrigerados</a></li>
          <li><a href="../productos/productos.html"> Snacks y pasabocas</a></li>
          <li><a href="../productos/productos.html"> Cuidado personal</a></li>
          <li><a href="../productos/productos.html"> Aseo del hogar</a></li>
          <li><a href="../productos/productos.html"> Granos</a></li>
          <li><a href="../productos/productos.html"> Bebidas</a></li>
        </ul>
      </div>
      <!-- estructura para hacer un carrusel de imagenes -->
      <div class="carrusel-total">
        <div class="carrusel">
          <!-- Boton atras -->
          <p><i class="fa-solid fa-arrow-left"></i></p>
          <!-- boton adelante -->
          <p><i class="fa-solid fa-arrow-right"></i></p>
          <img name="automatica" class="imagen" src="" alt=""/>
        </div>
      </div>
      <section class="contenedor">
         <!-- Contenedor de elementos -->
         <div class="contenedor-items">
          <div class="item">
              <span class="titulo-item">Arveja</span>
              <img src="../imagenes/arveja.png" width="200px" alt="" class="img-item">
              <span class="precio-item">$15.000</span>
              <p>500 gr ($3 x g)</p>
              <button class="boton-item"><i class="fa-solid fa-cart-shopping"></i> Agregar al Carrito</button>
          </div>
          <div class="item">
              <span class="titulo-item">Papel Higienico</span>
              <img src="../imagenes/papel.jpg" width="200px" alt="" class="img-item">
              <span class="precio-item">$25.000</span>
              <p>2 Unidades ($4.999 x Unidad)</p>
              <button class="boton-item"><i class="fa-solid fa-cart-shopping"></i> Agregar al Carrito</button>
          </div>
          <div class="item">
              <span class="titulo-item">Pañuelos</span>
              <img src="../imagenes/pañuelos.jpg" alt="" class="img-item">
              <span class="precio-item">$35.000</span>
              <p>10 Pañuelos x u($2 x 1 pañuelos)</p>  
              <button class="boton-item"><i class="fa-solid fa-cart-shopping"></i> Agregar al Carrito</button>
          </div>
          <div class="item">
              <span class="titulo-item">Jabon</span>
              <img src="../imagenes/jabon.jpg" alt="" class="img-item">
              <span class="precio-item">$18.000</span>
              <p>1.5 L ($3 x L)</p>
              <button class="boton-item"><i class="fa-solid fa-cart-shopping"></i> Agregar al Carrito</button>
          </div>
          <div class="item">
            <span class="titulo-item">Arveja</span>
            <img src="../imagenes/arveja.png" width="200px" alt="" class="img-item">
            <span class="precio-item">$15.000</span>
            <p>500 gr ($3 x g)</p>
            <button class="boton-item"><i class="fa-solid fa-cart-shopping"></i> Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Papel Higienico</span>
            <img src="../imagenes/papel.jpg" width="200px" alt="" class="img-item">
            <span class="precio-item">$25.000</span>
            <p>2 Unidades ($4.999 x Unidad)</p>
            <button class="boton-item"><i class="fa-solid fa-cart-shopping"></i> Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Pañuelos</span>
            <img src="../imagenes/pañuelos.jpg" alt="" class="img-item">
            <span class="precio-item">$35.000</span>
            <p>10 Pañuelos x u($2 x 1 pañuelos)</p>
            <button class="boton-item"><i class="fa-solid fa-cart-shopping"></i> Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Jabon</span>
            <img src="../imagenes/jabon.jpg" alt="" class="img-item">
            <span class="precio-item">$18.000</span>
            <p>1.5 L ($3 x L)</p>
            <button class="boton-item"><i class="fa-solid fa-cart-shopping"></i> Agregar al Carrito</button>
        </div>
      </div>
      </section>
      
    
          <p class="ofertas">
            <br /><a href="../ofertas/ofertas.html"
              >Ver mas ofertas<i class="fa-solid fa-chevron-right"></i
            ></a>
          </p>
        </section>
      </div>
      <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="../imagenes/logo rojo.png" alt="">
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
              <a href="../nosotros/nosotros.html">Acerca de nosotros</a>
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
            <p>Todos los derechos reservados © 2021 </p>
        </div>
    </footer>
    
        <!-- Carrito de Compras -->
        <div class="carrito" style="margin-right: -100%;" id="carrito">
          <div class="header-carrito">
            <i class="fa-solid fa-xmark" id="cerrarCarrito"></i>
              <h2>Carrito de compras</h2>
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
      <!--Modo de entrega-->
      <div class="modo-entrega" id="modo-entrega">
        <div class="header-titulo">
          <h2>¿Como desea recibir su pedido?</h2>
          <i class="fa-solid fa-circle-xmark cerrar-modo-entrega"></i>
        </div>
        <div class="opc-modo-entrega">
          <div class="recoger-tienda">
            <img src="../imagenes/recoger tienda.png" alt="">
            <p>Recojer tienda</p>
          </div>
          <div class="recoger-domicilio">
            <img src="../imagenes/recoger-domicilio.jpg" alt="">
            <p>Recojer domicilio</p>
          </div>
        </div>
      </div>
      <!-- verficar correo para el metodo de entrega -->
      <div class="verificar" id="verificar">
        <div class="header-titulo">
          <h3>Verifica tu correo electronico</h3>
        </div>
        <p>Si no tienes cuenta, escribe un correo electronico por donde <br> podemos contactarnos contigo</p>
        <div>
          <i class="fa-solid fa-user-secret"></i>
          <input type="email" id="" name=""  placeholder="Verifica tu correo">
          <button type="submit" class="btn-verificar" id="btn-verificar"><a href="#">Siguiente</a></button>
        </div>
      </div>
    <!-- Segir comprando -->
      <div class="cuadro-seguir" id="cuadro-seguir">
        <i class="fa-regular fa-circle-check"></i>
        <div class="seguir-comprando">
          <h3>Tus preferencias han sido guardadas exitosamente</h3>
        </div>
        <div>
          <button type="submit" class="btn-seguir"><a href="index.html">Seguir Comprando</a></button>
        </div>
      </div>
      <!-- donde te encuentras -->
      <div class="donde-encuentras" id="donde-encuentras">
        <div class="header-titulo">
          <h3>¿Donde te encuentras?</h3>
        </div>
        <div class="contenido">
          <p>Recuerda que manejamos el servicio de domicilio solamente dentro del municipio</p>
          <form action="" class="formulario-dir">
            <label for="" class="barrio">Barrio
              <input type="text" name="" id="" placeholder="Ingrese el nombre de su barrio" >
            </label>
            <label for="" class="direccion">Dirección
              <select name="" id="">Carrera
                <option value="">Seleccione</option>
                <option value="">Calle</option>
                <option value="">Carrera</option>
                <option value="">Avenidad</option>
              </select>
              <input type="number" class="calle">
              <span>#</span>
              <input type="text">
              <input type="number" class="num2">
              <input type="number">
            </label>
            <label for="" class="textarea">Descripción
              <textarea name="" id=""  cols="30" rows="5" placeholder="Escribe tu comentario"></textarea>
            </label>
          </form>
          <button class="btn-guardar" id="btn-guardar"><a href="#">Guardar</a></button>
        </div>
      </div>
      
    </div> <!-- div container -->
    <script
      src="https://kit.fontawesome.com/72ac7502a0.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/helper.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
