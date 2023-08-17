<?php

include_once "model/login.php"; 

class loginController{
    private $object; 
    
    public function __construct()
    {
        $this->object = new login(); 
    }

    public function Inicio(){
        $style = "<link rel='stylesheet' href='assets/css/style-login.css'>"; 
        require_once "view/head.php"; 
        require_once "view/header.php"; 
        require_once "view/login/login.php"; 
        require_once "view/footer-login.php";
    }

    public function validarFormulario(){
        if(empty($_POST['user']) || empty($_POST['pass'])){ 
            header("Location: ?a=login&b=Inicio"); 
        }else{
            $name = $_POST['user']; 
            $pass = md5($_POST['pass']);  
            if($this->object->usuarioExiste($name)){
                if($this->object->passwordExiste($pass, $name)){
                    header("Location: ?a=paneladmin&b=Inicio"); 
                }else{
                    echo "Usuario y/o contraseña incorrectos"; 
                }
            }else{
                echo "El usuario no existe!";  
            }
        }
    }

    public function newAccount(){
        if(empty($_POST['ctNombre']) || empty($_POST['ctEmail']) || empty($_POST['ctTel']) || empty($_POST['ctFNac']) || empty($_POST['selGen']) || empty($_POST['ctUser']) || empty($_POST['ctPass']) || empty($_POST['ctPass2'])){
            header("location: ?a=login&b=Inicio"); 
        }else{
            if($this->object->verifyNumberString($_POST['ctNombre'])){
                echo "El nombre no debe contener numeros"; 
            }else{
                if(!$this->object->verifyEmailString($_POST['ctEmail'])){
                    echo "El formato del correo electronico no es valido"; 
                }else{
                    if($this->object->verifyLeterString($_POST['ctTel'])){
                        echo "El numero de telefono no debe llevar letras"; 
                    }else{
                        if($this->object->verifyAgeUser($_POST['ctFNac'])){
                            if($this->object->usuarioExiste($_POST['ctUser'])){
                                echo "El usuario ya existe"; 
                            }else{
                                if($_POST['ctPass'] === $_POST['ctPass2']){
                                    if($this->object->verifyPasswordString($_POST['ctPass'])){
                                        
                                        $l = new Login(); 
                                        $l->name = $_POST['ctNombre']; 
                                        $l->email = $_POST['ctEmail']; 
                                        $l->tel = $_POST['ctTel']; 
                                        $l->date = $_POST['ctFNac']; 
                                        $l->gen = $_POST['selGen']; 
                                        $l->user = $_POST['ctUser']; 
                                        $l->pass = md5($_POST['ctPass']);
                                        
                                        if($this->object->saveCliente($l)){
                                            header("Location: ?a=login&b=Inicio&c=true");  
                                        }else{
                                            echo "No se pudo registrar el cliente"; 
                                        }

                                    }else{
                                        echo "la contraseña no cumple con la seguridad minima"; 
                                    }
                                }else{
                                    echo "las contraseñas no coinciden"; 
                                }
                            }
                        }else{
                            echo "El usuario es menor de edad";
                        }
                    }
                } 
            } 
        }
    }

}

?>