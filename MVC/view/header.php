<body>
  <div class="container-fliud">
    <header>
      <div class="header-top">
        <div class="social-networks">
          <a href="#" class="icon-link" data-tooltip="Llamar"><i class="fa fa-phone">hola</i></a>
          <a href="#" class="icon-link" data-tooltip="Perfil"><i class="fa fa-user"></i></a>
          <a href="#" class="icon-link" data-tooltip="Mensaje"><i class="fa fa-message"></i></a>
      </div>     
          <div class="logo">
              <a href="?a=index&b=Inicio"><img src="assets/images/logo rojo.png" alt=""></a>
          </div>
      </div>
      <div class="header-bottom">
          <div class="icon-menu" onclick="menuAparecer();">
              <i class="fa-solid fa-bars"></i>
          </div>
          <div class="logoPrincipal">
              <a href="?a=index&b=Inicio"><img src="assets/images/logo-white.png" alt=""></a>
          </div>
          <div class="search">
              <div id="search-bar">
                  <input type="search" name="searchInput" placeholder="¿Que buscas hoy?">
              </div>
              <div class="other-services">
                  <a href="#">
                  <i class="fa-solid fa-truck-moving"></i><span class="link-text">Modo de Entrega</span>
                  </a>
                  <a href="?a=nosotros&b=Inicio">
                    <i class="fa-solid fa-store"></i><span class="link-text">¿Quienes somos?</span>
                  </a>
                </div>
          </div>
          <div class="services" onclick="aparecerCarrito();">
              <a class="carro" href="#">
                  <i class="fa-solid fa-cart-shopping micarrito"></i>
                  <p id="texto-carrito">Mi carrito</p>
              </a>
              <a href="?a=login&b=Inicio">
                  <i class="fa-solid fa-circle-user mi-cuenta"></i>
                  <p id="texto-carrito">Mi cuenta</p>
              </a>
          </div>
      </div>
    </header>      
  </div>

  <script src="assets/js/index.js"></script>
  <script src="assets/js/indexHelper.js"></script>
