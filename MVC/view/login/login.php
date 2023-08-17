        <main>
            <?php
                if(isset($_REQUEST['c'])){
                    echo ($_REQUEST['c'] == "true") ? "<script>alert('Usuario Registrado con exito')</script>" : ""; 
                }
            ?> 
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="?a=login&b=validarFormulario" class="formulario__login" method="post" id="form">
                        <a href="?a=index"><img src="assets/imagenes/logo rojo.png" alt="Iniciar Sección"></a>
                        <input type="text" name="user" placeholder="Correo Electronico" required>
                        <input type="password" name="pass" placeholder="Contraseña" required>
                        <button>Entrar</button>
                    </form>

                    <!--Fomulario de Registro Cliente-->
                    <form action="?a=login&b=newAccount" class="formulario__register" method="post">
                        <h2>Regístrarse</h2>
                        <input type="text" name="ctNombre" id="name" placeholder="Nombre completo">
                        <input type="email" name="ctEmail" id="email" placeholder="Correo Electronico">
                        <input type="number" name="ctTel" id="tel" placeholder="Numero de Telefono">
                        <input type="date" name="ctFNac" id="fechaNacimiento" placeholder="Fecha de nacimiento">
                        <select name="selGen" class="form-select" id="genero" aria-label="Default select example">
                            <option selected >Género</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option> 
                          </select>
                        <input type="text" name="ctUser" id="user" placeholder="Usuario">
                        <input type="password" name="ctPass" id="password" placeholder="Contraseña minima 8 caracteres">
                      
                        
                        <input type="password" name="ctPass2" id="password" placeholder="Confirmar Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/indexHelper.js"></script>
        <script src="https://kit.fontawesome.com/7cc00942f2.js" crossorigin="anonymous"></script>