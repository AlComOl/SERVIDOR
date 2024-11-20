<?php
session_start();

if(isset($_POST['borrar'])){
    $_SESSION=[];
}


if(!isset($_SESSION["tabla"])){//si no existe inicializamos el array
    for($i=0;$i<6;$i++){//cada vez que iteramos metemos los 7 ceros
        $_SESSION["tabla"][]=[0,0,0,0,0,0,0];
        
    }
}


if(isset($_POST["boton"])){//si le dam0os al boton
    
    $j=0;
    $jugado1=1;
    $jugador2=2;
    $columna=$_POST["boton"];//metemos el value de la variable en $columna
 
    $encontrado=false;

    while($j<6 && !$encontrado){

    
    if($_SESSION["tabla"][$j][$columna]===0){

       $_SESSION["tabla"][$j][$columna]=1;
    
       $encontrado=true;
    }
    $j++;
    }
}


print_r($_SESSION['tabla']);
// $q=(count($_SESSION['tabla']['2']));
// print_r($q);

// print_r($_SESSION).'<br>';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>CONECTA 4</title>
</head>
<body>

<form action="" method="post">
    <table>
    <tr>
    <button type="submit" name="boton" value="0">+</button>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    <button type="submit" name="boton" value="1">+</button>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    <button type="submit" name="boton" value="2">+</button>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    <button type="submit" name="boton" value="3">+</button>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    <button type="submit" name="boton" value="4">+</button>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    <button type="submit" name="boton" value="4">+</button>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       
    </tr>
    <tr>
    <button type="submit" name="boton" value="4">+</button>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td> 
    </tr>
    <tr>
        
    </tr>
    
   
    
    
   
    <button type="submit" name="boton" value="5">+</button>
    </table>
</form>


<form action="" method='post'>
    <input type="submit" name="borrar" value="borrar">
</form>

</body>
</html> 