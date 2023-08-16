<?php

include_once 'lib/database/conexion.php';

class login
{
    private $conexion;

    public $id, $name, $email, $tel, $date, $gen, $user, $pass; 

    public function __construct()
    {
        try {
            $this->conexion = conexionDatabase::conexion();
        } catch (Exception $e) {
            echo "Error al conectar la base de datos: " . $e->getMessage();
        }
    }

    public function saveCliente(Login $data)
    {
        try {
            $sql = "INSERT INTO cliente(namecli, emailcli, telcli, datecli, gencli, usercli, passcli) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $result = $this->conexion->prepare($sql)->execute(array(
                $data->name,
                $data->email, 
                $data->tel, 
                $data->date, 
                $data->gen, 
                $data->user, 
                $data->pass
            )); 

            if($result){
                return true;
            } else{
                return false;
            }
        } catch (Exception $e) {
            echo "Error al guardar Cliente: " . $e->getMessage();
        }
    }

    public function usuarioExiste($usuario){
        try{
            $sql = "SELECT usercli FROM cliente WHERE usercli = '".$usuario."' ";  
            $resultado = mysqli_query($this->conexion, $sql); 

            if(mysqli_num_rows($resultado)){
                return true; 
            }else{
                return false; 
            }
        }catch(Exception $e){
            echo "Error al validar usuario: ". $e->getMessage(); 
        }
    }

    public function passwordExiste($pass, $user) {
        try {
            $sql = "SELECT idcli FROM cliente WHERE passcli = ? AND usercli = ?";
            $stmt = mysqli_prepare($this->conexion, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $pass, $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Error al validar usuario: " . $e->getMessage();
        } finally {
            // Cerrar el statement
            mysqli_stmt_close($stmt);
        }
    }
    

    // -----Metodo para verificar si un string contiene numeros----- //
    public function verifyNumberString($string){
        return preg_match('/\d/', $string) === 1 ? true : false; 
    }

    // -----Metodo para verificar que un string sea un correo electronico----- //
    public function verifyEmailString($string){
        return filter_var($string, FILTER_VALIDATE_EMAIL) ? true : false;
    }

    // -----Metodo para verificar que entre los numero haya letras----- //
    public function verifyLeterString($number){
        return preg_match('/[a-zA-Z]/', $number) === 1 ? true : false; 
    }

    // -----Metodo para verificar contraseña----- //
    public function verifyPasswordString($password){
        $longmin = 8; 
        $mayus = true; 
        $minus = true; 
        $number = true; 

        // -----Verificar longitud minima----- //
        $longpass = (strlen($password) < $longmin) ? false : true;
        // -----Verificar mayuscula----- //
        $mayuspass = ($mayus && preg_match('/[A-Z]/', $password)) ? true : false;  
        // -----Verificar minuscula----- //
        $minuspass = ($minus && preg_match('/[a-z]/', $password)) ? true : false; 
        // Verificar numeros----- //
        $numberpass = ($number && preg_match('/[0-9]/', $password)) ? true : false;

        return ($longpass === true && $mayuspass === true && $minuspass === true && $numberpass === true) ? true : false; 
    }

    // -----Metodo para verificar que la persona sea mayor de 18 años----- //
    function verifyAgeUser($fecha) {
        $date = new DateTime($fecha);
        $fechaActual = new DateTime();
        $diferencia = $date->diff($fechaActual);
        $result = $diferencia->y;
        
        if ($result >= 18) {
            return true;
        } else {
            return false;
        }
    }

}
