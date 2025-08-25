<?php
session_start();
$dados=[0,1,2,3,4,5,];
$aleatorio=0;
$contador=0;
$contador1=0;
$contadorAciertos=false;
//lanzar dado si le doy a lanzar 
if(isset($_POST["lanzar"])){
  $aleatorio=(rand(1,6)-1);
}

//dados random dentro del array si no esta creado aun 
if(!isset($_SESSION["datosRandom"])){
   $_SESSION["datosRandom"]=[0];
  for ($i=0; $i < 6; $i++) { 
    $valor=($dados[]=(rand(1,6)-1));
    array_push($_SESSION["datosRandom"], $valor);
  }
 print_r($_SESSION["datosRandom"]);
}

//acierto y fallos
if(!isset($_SESSION["aciertos"])){
    $_SESSION["aciertos"]=0; 
  }
if(!isset($_SESSION["fallos"])){
               $_SESSION["fallos"]=0; 
  }
  if(isset($_SESSION["datosRandom"])){
    if(isset($_POST["lanzar"])){
      for ($z=0; $z < 6; $z++) { 
           if($aleatorio==$_SESSION["datosRandom"][$z]){
            $contadorAciertos=true;
            echo" $contadorAciertos";
           }
      }
       if($contadorAciertos==true){
        $_SESSION["aciertos"]++;
       }elseif($contadorAciertos==false){
        $_SESSION["fallos"]++;
       }

    }
  }
//borrar las bariables de seion para empezar de nuevo

if(isset($_POST["borrar"])){
  session_destroy();
  for ($i=0; $i < 6; $i++) { 
    $valor=($dados[]=(rand(1,6)-1));
    array_push($_SESSION["datosRandom"], $valor);
  }
 print_r($_SESSION["datosRandom"]);
}





  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>El dado lanzado es: </h2>
    <?php
      echo"<img style:padding:40px; src=../img/dado$aleatorio.png><img/>";
    ?>
  <h1>MOSTRAMOS LOS DADOS: </h1>
  
  <?php
    for ($i=0; $i < 6; $i++) { 
      
      // echo"<img style:padding:40px; src='../img/dado$_SESSION["datosRandom"].png'><img/>";
      echo "<img style='padding:40px;' src='../img/dado" . $_SESSION["datosRandom"][$i] . ".png'/>";

    }
  ?>

<div>
<form method="post">
  <button name="lanzar" style="padding:20px 30px; margin:10px; background-color:blue">Lanzar</button>
  <button name="borrar" style="padding:20px 30px; margin:10px; background-color:red">Borrar</button>
</form>    
</div>
<div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
  <h1>Aciertos:</h1>
  <div style="background-color: yellow; font-size: 30px;font-weight: bold;">
  <?php
  print_r($_SESSION["aciertos"]);
  ?>
   </div>
  <h1>Fallos:</h1>
  <div style="background-color: pink; font-size: 30px;font-weight: bold;">
  <?php
  print_r($_SESSION["fallos"]);
  ?>
  </div>
</div>

</body>
</html>


