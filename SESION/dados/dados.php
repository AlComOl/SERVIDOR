<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado</title>
</head>
<body>
<?php
    ?>

    <img src="./dados/dado1.png"></img><img src="./dados/dado2.png"></img><img src="./dados/dado3.png"></img><img src="./dados/dado4.png"></img><img src="./dados/dado5.png"></img><img src="./dados/dado6.png"></img>

<?php

$fallos=0;
$aciertos=0;
$_SESSION["fallos"]=$fallos;
$_SESSION["aciertos"]=$aciertos;

if(!isset($_SESSION["dado"])){//si la var de sesion dado no se ha iniciado

 $_SESSION["dado"]=[]; //la inicio vacia

}
?>
<div>
   <!-- vuelve a enviar los datos al archivo si apretamos algun boton -->
    <form action="dados.php" method="post">
         <h3>ACIERTOS : <?= $aciertos ?></h3>
         <h3>FALLOS: <?= $fallos ?></h3>
        <button type="submit" name="tirar" value="">TIRAR</button> 
        <button type="submit" name="reiniciar">REINICIAR</button>
    </form>
</div>
 <?php



if(isset($_POST["tirar"])){//si tirar esta lleno(apretar boton tirar)
 $tirada=rand(1,6);//numero aleatorio
//comprobar el numero de aciertos
if(empty($_SESSION["dado"][$tirada])){

 $_SESSION["dado"][$tirada]=$tirada;

$_SESSION["aciertos"]++;
}else{
$_SESSION["fallos"]++;
}
$aciertos=$_SESSION["aciertos"];
$fallos=$_SESSION["fallos"];

 foreach($_SESSION["dado"] as $key=>$value){

   echo"$key"."=>"."$value";
 }

 switch ($tirada) {
    case '1':
        ?>
        <img src="./dados/dado1.png">
        <?php
     break;
     case '2':
        ?>
        <img src="./dados/dado2.png">
        <?php
     break;
     case '3':
        ?>
        <img src="./dados/dado3.png">
        <?php
     break;
     case '4':
        ?>
        <img src="./dados/dado4.png">
        <?php
     break;
     case '5':
        ?>
        <img src="./dados/dado5.png">
        <?php
     break;
     case '6':
        ?>
        <img src="./dados/dado6.png">
        <?php
     break;
       
                
    
    default:
        # code...
        break;
 }
}
 ?>
 
    
</body>
</html>








