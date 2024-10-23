<?php
session_start();
include("BD.php");
$encontrado = false;
$recordar;
$_POST["username"];
$_POST["password"];


//Comprobar si el usuario apreto el checkbox de recordar
if(isset($_POST["recordar"])){
    $recordar=true;
}else{
    $recordar=false;
}


if (isset($_POST["entrar"])) { //si se manda el formulario
    if (empty($_POST["username"]) || empty($_POST["password"])) { //si esta vacio el formulario
        $_SESSION["vacio"] = true; //declaramos y llenamos con true
        header("Location: ./Login.php"); //redireccionamos a Login

    } elseif (isset($_POST["username"]) && isset($_POST["password"])) { //si tenemos los campos llenos
        $_SESSION["logueado"] = true;
      
        $i = 0;
        while ($i < count($usuarios) && $encontrado == false) { //mientras la menor pos array && comprobado==false correra


            //si encontramos usuario introducido es igual al del array , igaul con el password
            if (($usuarios[$i]["usuario"] == $_POST["username"]) && ($usuarios[$i]["password"] == $_POST["password"])) {

                $encontrado = true; //para salir del bucle 
                $nombre = $usuarios[$i]["nombre"]; //guardaria el nombre
                // if ($comprobado) {//no hace falta la condicion sino , no hubiera entrado en el if anterior
                    $_SESSION["nombre"] = $usuarios[$i]["usuario"];
                    $_SESSION["rol"] = $usuarios[$i]["rol"];
                    // $user= $usuarios[$i]["usuario"];
                  
                
            }
            $i++; //la i tiene que estar detras para que ciente el primero


             // Crear cookies si se seleccionó el checkbox de recordar
        if ($recordar) {
            // setcookie("usuario", $user, time() + (86400 * 30), "/"); // 30 días
            setcookie("usuario", $user, time() + (10), "/");

        } else {
            // Borrar las cookies si el usuario no quiere recordar
            setcookie("usuario", "", time() - 3600, "/");
        }
            

            
        }
        if($encontrado == true){
            
            $_SESSION["tiempo"] = time() + 5;
            header("location:./Menu.php");
        
        }else{
            $_SESSION["usuarioEncontrado"]=false;
            header("location:./Login.php");
            unset($_SESSION['usu_encontrado']);//elimina la variable
          
        }
    

    }

}



