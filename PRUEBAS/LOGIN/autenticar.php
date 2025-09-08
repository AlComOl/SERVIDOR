<?php
session_start();
include("./bd.php");

$user = $_POST["Usuario"];
$pas = $_POST["Password"];
$_SESSION["vacio"]=false;
$_SESSION["alumno"]=false;
$_SESSION["profesor"]=false;




if(empty ($user) || empty($pas) ){
 $_SESSION["vacio"]=true;
 header("Location: ./Index.php");
 
}else{
    $_SESSION["vacio"]=false; 
   


    foreach($usuarios as $key => $value) {

        if($value["usuario"]==$user && $value["password"]==$pas ){
        
            if($value["rol"]=="ROLE_ALUMNO"){
                $_SESSION["alumno"]=true;
             header("Location:./menu.php");
             
             }
            if($value["rol"]=="ROLE_PROFE"){
                $_SESSION["profesor"]=true;
                header("Location: ./menu.php");
               
                
             }
      }
    }

}

if(isset($_POST["salir"])){
     setcookie(session_name(), '', time() - 3600, '/'); 
        session_destroy(); 
}
        
        
    


?>