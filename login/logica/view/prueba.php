    <?php 

    function verificarCredenciales($conectar, $email, $password) {
        $query = "SELECT user FROM clientes WHERE user = '$email' AND pass = '$password'";
        $result = mysqli_query($conectar, $query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $cliente = mysqli_fetch_assoc($result);
            return $cliente;
        } else {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener las credenciales ingresadas por el usuario
        $email = $_POST["email"];
        $password = $_POST["pass"];

        // Configurar la conexión a la base de datos
        $conectar = mysqli_connect("localhost", "root", "", "komorebi");

        // Verificar las credenciales en la base de datos
        $cliente = verificarCredenciales($conectar, $email, $password);
        if ($cliente !== false) {
            session_start();
            $_SESSION['usuario'] = $cliente['user'];
            // Redirigir al archivo .php deseado después del inicio de sesión
            header("Location: ../../../index/index.php");
            exit();
        } else {
            echo 'Credenciales inválidas. Intente nuevamente.';
        }

        mysqli_close($conectar);
    }

            // Agregar el siguiente código para eliminar la sesión
        if (isset($_GET['logout'])) {
            session_start();
            session_unset(); // Elimina todas las variables de sesión
            session_destroy(); // Destruye la sesión
            header("Location: ../../../index/index.php"); // Redirige a la página de inicio de sesión
            exit();
        }
    ?>