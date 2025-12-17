<?php
include("./logicaConecta.php");
session_start();


if(isset($_POST['eliminar'])){//borrar $de sesion
    session_destroy();
}

if(!isset($_SESSION['juego'])){//Si no existe la sesion la instancia dentro de la $sesion(juego)
    $_SESSION['juego']=$NuevoJuego;
}

// inserto ficha 
if(isset($_POST["columna"])){
    $NuevoJuego=$_SESSION['juego'];
      $NuevoJuego->insertarFila($_POST["columna"]);
      $_SESSION['juego'] = $NuevoJuego;

}




if(isset($_SESSION['cantidad'])){
$_SESSION['cantidad']=[];
}

//contar fichas antes de los botones para desabilitar
$tablero=$NuevoJuego->getJuegoConecta();

$_SESSION['cantidad']=[];
for ($c=0; $c < 6; $c++) {
    $_SESSION['cantidad'][$c]=count($tablero[$c]);  
}

$ganador=$NuevoJuego->hayGanador();

//Botones
echo"<table>";
echo"<div class='display'>";
    for ($s=0; $s < 6; $s++) {
        $disabled = ($_SESSION['cantidad'][$s] >= 6 || $ganador ) ? 'disabled' : '';//desabilita el boton
        echo"<form method='post'>
                <button  type='submit' name='columna' value='$s'  $disabled >⬇️</button>
            </form>"; 
}
//ganador



$tablero=$NuevoJuego->getJuegoConecta();

$_SESSION['cantidad']=[];



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
echo"</div>";
//boton reset
echo"<div class='comienzo'>";
        echo"<form method='post'>
                <button type='submit' name='eliminar' value=''>Empezar Partida</button>
            </form>"; 
 echo"</div>";
    
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
    <link rel="stylesheet" href="./css/style.css">
    <title>Conecta</title>
</head>
<body>



</html>