<?php
session_start();
include("BD.php");
$comprobado = false;
$_POST["username"];
$_POST["password"];


if (isset($_POST["entrar"])) { //si se manda el formulario
    if (empty($_POST["username"]) || empty($_POST["password"])) { //si esta vacio el formulario
        $_SESSION["vacio"] = true; //declaramos y llenamos con true
        header("Location: ./Login.php"); //redireccionamos a Login

    } elseif (isset($_POST["username"]) && isset($_POST["password"])) { //si tenemos los campos llenos
        $_SESSION["logueado"] = true;

        $i = 0;
        while ($i < count($usuarios) && $comprobado == false) { //mientras la menor pos array && comprobado==false correra


            //si encontramos usuario introducido es igual al del array , igaul con el password
            if (($usuarios[$i]["usuario"] == $_POST["username"]) && ($usuarios[$i]["password"] == $_POST["password"])) {

                $comprobado = true; //para salir del bucle 
                $nombre = $usuarios[$i]["nombre"]; //guardaria el nombre
                // if ($comprobado) {//no hace falta la condicion sino , no hubiera entrado en el if anterior
                    $_SESSION["nombre"] = $usuarios[$i]["usuario"];
                    $_SESSION["password"] = $usuarios[$i]["password"];
                    $_SESSION["rol"] = $usuarios[$i]["rol"];
                    $_SESSION["recordar"] = $_POST["valor"];
                // }

                header("Location: ./Menu.php");



          

            }else{
                header("Location: ./Menu.php");
            }
            $i++; //la i tiene que estar detras para que ciente el primero

            

            
        }
    }

}