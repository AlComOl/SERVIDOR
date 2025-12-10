<?php
session_start();

if(!isset($_SESSION['contador']))   $contador=0;
  

if(isset($_COOKIE['Alvaro'])){
    $contador=$_SESSION['contador'];
    $contador++;
    $_SESSION['contador']=$contador;
    echo"<div style='background-color:blue;width:100px; height: 100px;'>";
    echo"Hola de nuevo";

    echo" Entradas por usuario: $contador";
    echo"</div>";
    echo"</div>";
    echo"<br>";
    echo"<form method='post'><button style='width:100px; height: 50px;' name='enviar' id='' class='btn btn-primary' type='submit' value=''>BORRAR COKIES</button></form>";
    echo"<form method='post'><button style='width:100px; height: 50px;' name='contador' id='' class='btn btn-primary' type='submit' value=''>BORRAR CONTADOR</button></form>";



}else{
    $contador=$_SESSION['contador'];
    $contador++;
    $_SESSION['contador']=$contador;
    setcookie("Alvaro", 1, time() + 3200);
    echo"<div style='background-color:yellow;width:100px; height: 100px;'>";
    echo"Bienvenido a la web";
    //  echo" Entradas por usuario: ". print($_SESSION['contador']) ." </div>";
    echo"</div>";
}


if(isset($_POST['enviar'])){
    unset($_COOKIE["Alvaro"]);
    // header("Location:/e2.php");
}

if(isset($_POST['contador'])){
    $_SESSION['contador']=0;
   $contador=0;

}






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cokies</title>
</head>

<style>
    div{
   
    }
</style>
<body>
    
</body>
</html>