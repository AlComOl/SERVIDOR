<?php
include("./logicaConecta.php");
session_start();


if(isset($_POST['eliminar'])){//borrar $de sesion
    session_destroy();
}

if(!isset($_SESSION['juego'])){//Si no existe la sesion la instancia dentro de la $sesion(juego)
    $_SESSION['juego']=$NuevoJuego;
}

//inerto ficha 
if(isset($_POST["columna"])){
    $NuevoJuego=$_SESSION['juego'];
      $NuevoJuego->insertarFila($_POST["columna"]);
      $_SESSION['juego'] = $NuevoJuego;

}



echo"<br><br><br><br><br>";

print_r($NuevoJuego);



echo"<br><br><br><br><br>";


if(isset($_SESSION['cantidad'])){
$_SESSION['cantidad']=[];
}

//contar fichas antes de los botones para desabilitar
$tablero=$NuevoJuego->getJuegoConecta();

$_SESSION['cantidad']=[];
for ($c=0; $c < 6; $c++) {
    $_SESSION['cantidad'][$c]=count($tablero[$c]);  
}



//Botones
for ($s=0; $s < 6; $s++) {

      $disabled = ($_SESSION['cantidad'][$s] >= 6) ? 'disabled' : '';//desabilita el boton
     echo"<form method='post'>
    <button type='submit' name='columna' value='$s'  $disabled >➕</button>
     </form>"; 
}
//boton reset
 echo"<form method='post'>
        <button type='submit' name='eliminar' value=''>Empezar Partida</button>
     </form>"; 

$tablero=$NuevoJuego->getJuegoConecta();

$_SESSION['cantidad']=[];


echo"<table>";
//recorro de abajo arriba
for ($i=5; $i >= 0 ; $i--) { 
    echo"<tr>";
    for ($z=0; $z < 6; $z++) { 
        
        // $i es el  índice 5 el tope, arriba
        if (isset($tablero[$z][$i])) {
            if ($tablero[$z][$i] == 1) {
                echo "<td style='background-color:red'></td>";
            } else {
                echo "<td style='background-color:yellow'></td>";
            }
        } else {
            echo "<td style='background-color:white'></td>";
        }
    }
    echo"</tr>";
}
echo"</table>";

print_r($_SESSION['cantidad']);
    
echo"</table>";

$tablero=$NuevoJuego->getJuegoConecta();

echo $NuevoJuego->CompruebaHorizontal();

echo $NuevoJuego->CompruebaVertical();

echo $NuevoJuego->CompruebaDiagonalAscendente();

echo $NuevoJuego->CompruebaDiagonalDescendente();







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<!-- <style>
body {
  
    min-height: 100vh;
    background-color: #f0f0f0;
    margin: 0;
}

table {
    border-collapse: collapse;
    background-color: #0047ab; 
    padding: 10px;
}

td {
    width: 80px;
    height: 80px;
    border-radius: 50%;       
    background-color: white; 
    margin: 5px;
}

form {
   display: inline;
 
}


button:hover {
    background-color: #ccc;
}
button{
    height: 40px;
    width: 80px;
}
</style> -->
<body>



</html>