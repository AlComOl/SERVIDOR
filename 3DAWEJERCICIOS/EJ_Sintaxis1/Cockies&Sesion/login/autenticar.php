<?php
session_start();
include("bd.php");

$usuario=$_POST['usuario'];
$pswd=$_POST['pswd'];

    if(empty ($_POST['usuario'] && $_POST["pswd"])){
           
        $_SESSION['vacio']=true;
        header("Location:./index.php");

    }else{

        $encontrado=false;
        $i=0;

        while($i<count($usuarios) && !$encontrado){

            if($_POST['usuario'] === $usuarios[$i]['usuario'] && $_POST['pswd'] === $usuarios[$i]['password']){
                
                    $_SESSION['usuario']=$usuarios[$i]['usuario'];
                    $_SESSION['rol']=$usuarios[$i]['rol'];
                    $encontrado=true;
                    header("Location:./menu.php");
            }

            $i++;
        } 
    }


    // foreach($usuarios as $user){ //he patinado aqui 

    //         if($usuario === $user['usuario'] && $paswrd === $user['password']){

    //             $_SESSION['rol']=$user['rol'];
                        
    //              header("Location:./menu.php");
    //         }
            
    // }

     if($encontrado===false){
     
         $_SESSION['incorrecto']=true;
         header("Location: ./index.php");
       
     }
   




?>