<?php
// include_once "../model/login.php"; 

// if(empty($_POST['ctNombre']) || empty($_POST['ctEmail']) || empty($_POST['ctTel']) || empty($_POST['ctFNac']) || empty($_POST['selGen']) || empty($_POST['ctUser']) || empty($_POST['ctPass'])){
//     header("Location: ../view/index.html");
// } else{
//     $name = $_POST['ctNombre'];
//     $email = $_POST['ctEmail'];
//     $tel = $_POST['ctTel'];
//     $fNac = $_POST['ctFNac'];
//     $genero = $_POST['selGen'];
//     $user = $_POST['ctUser'];
//     $pass = $_POST['ctPass'];

//     $login = new login(); 

//     if($login->guardar($name, $email, $tel, $fNac, $genero, $user, $pass)){
//         header("Location: ../view/index.html");
//     }else{
//         echo "error";
//     }

// }

include_once "model/login.php"; 

class loginController{
    private $object; 
    public function __construct()
    {
        $this->object = new login(); 
    }

    public function Inicio(){
        require_once "view/login/login.php"; 
    }

    public function validarFormulario(){
        if(empty($_POST['user']) || empty($_POST['pass'])){ 
            header("Location: ?a=login&b=Inicio"); 
        }else{
            $name = $_POST['user']; 
            $pass = $_POST['pass'];  
            if($this->object->usuarioExiste($name)){
                if($this->object->passwordExiste($pass)){
                    header("Location: ?a=paneladmin&b=Inicio"); 
                }else{
                    header("Location: ?a=login&b=Inicio"); 
                }
            }else{
                header("Location: ?a=login&b=Inicio"); 
            }
        }
    }


}

?>