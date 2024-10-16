<?php
session_start();
// include("BD.php");

if(isset($_POST["entrar"])){//si se manda el formulario
    if( empty ($_POST["username"])|| empty( $_POST["password"]) ){//si esta vacio el formulario
        $_SESSION["vacio"]=true;//declaramos y llenamos con true
        header("Location: ./Login.php");//redireccionamos a Login

    }
    elseif(isset($_POST["username"]) && isset($_POST["password"])){//si tenemos los campos llenos
        $_SESSION["logueado"]= true;
        header("Location: ./BD.php");

        while($_usuarios["usuario"]==$_POST["username"]){//hay que poner un buleano para que pare esta mal 

            if($_usuarios["usuario"]==$_POST["username"] ){
    }
}

}
}
// if(isset($_POST["username"])|| empty($_POST["username"])){

//     if(isset($_POST["password"])|| empty($_POST["password"])){
//         $_SESSION['caduca']=time()+30;
        

//     }


// }else{
//     header("Location: ./Login.php");
//     echo"VACIO";
// }





