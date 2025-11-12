<?php
include("bd.php");
session_start();
if(isset($_POST["enviar"])){

    $usuario=$_POST['usuario'];
    $paswrd=$_POST['pswd'];


    foreach($usuarios as $user){ //he patinado aqui 

            if($usuario === $user['usuario'] && $paswrd === $user['password']){

                $_SESSION['rol']=$user['rol'];
                        
                 header("Location:./menu.php");
            }
            
    }


    }else{
        echo"USUARIO O PASSWORD INCORRECTOS";
    }





?>