<?php
session_start();
$colores=['red','blue','green','yellow'];
if(!isset($_SESSION['aciertos'])) $_SESSION['aciertos'] = 0;
if(!isset($_SESSION['fallos'])) $_SESSION['fallos'] = 0;

$aleatorio="";

   if(isset($_POST['borrar'])){
        session_destroy();
    }


if(isset($_POST['rojo']) || isset($_POST['verde']) || isset($_POST['amarillo']) || isset($_POST['azul']) ){


    $aleatorio=$colores[array_rand($colores)];    

    $_SESSION['aleatorio']=$aleatorio;     
  

    if(isset($_POST['rojo'])){
        
        if($_POST['rojo']===$_SESSION['aleatorio']){
            
           $_SESSION['aciertos']++;

        }else{
            $_SESSION['fallos']++;
        }

    }
     if(isset($_POST['verde'])){
        if($_POST['verde']===$_SESSION['aleatorio']){
            $_SESSION['aciertos']++;
        }else{
            $_SESSION['fallos'];
        }
        
    }

     if(isset($_POST['azul'])){
          if($_POST['azul']===$_SESSION['aleatorio']){
            $_SESSION['aciertos']++;
        }else{
            $_SESSION['fallos']++;
        }
        
    }

     if(isset($_POST['amarillo'])){
          if($_POST['amarillo']===$_SESSION['aleatorio']){
            $_SESSION['aciertos']++;
           
        }else{
            $_SESSION['fallos']++;
        }
        
    }

// echo"existe la variable session aleatorio";

//  $aleatorio=$colores[array_rand($colores)];    

//  $_SESSION['aleatorio']=$aleatorio;

// $aciertos=0;
// $fallos=0;

}else{

$aleatorio=$colores[array_rand($colores)];    

$_SESSION['aleatorio']=$aleatorio;

 
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon</title>
</head>
<style>
    button{
        height: 50px;
        width: 100px;
    }
    .div{
        height: 50px;
        width: 100px; 
    }
</style>
<body>
    <h1>Color aleatorio</h1>
    <div style='height: 50px; width: 100px; background-color:<?php echo $aleatorio?>'>

 
    </div>
       <br>
    <div>
        <form method="post">
        <button name="rojo" value="rojo" style='background-color:red'></button><button name="azul" value="azul" style='background-color:blue'></button><button name="amarillo" value="amarillo" style='background-color:yellow'></button><button name="verde" value="verde" style='background-color:green'></button>

        <button name="borrar">Nueva Partida</button>
        </form>
    </div>
    <h3>ACIERTOS:</h3>
    <?php print_r($_SESSION['fallos']); ?>
    <h3>FALLOS:</h3>
     <?php print_r($_SESSION['aciertos']) ?>
   
</body>
</html>