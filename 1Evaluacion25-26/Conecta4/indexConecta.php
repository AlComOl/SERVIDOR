<?php
include("./logicaConecta.php");
session_start();

if(isset($_POST['eliminar'])){//borrar $de sesion
    session_destroy();
}

if(!isset($_SESSION['juego'])){//Si no esiste la sesion la instancia dentro de la $sesion(juego)
    $_SESSION['juego']=$NuevoJuego;//lo serializa y lo mete todo  dentro del 
}


if(isset($_POST["columna"])){
    $NuevoJuego=$_SESSION['juego'];
      $NuevoJuego->insertarFila($_POST["columna"]);
      $_SESSION['juego'] = $NuevoJuego;

}


echo"<br><br><br><br><br>";

print_r($NuevoJuego);

// echo"<br><br>";


if(isset($_SESSION['cantidad'])){
$_SESSION['cantidad']=[];
}



echo"<br><br><br><br><br>";

for ($s=0; $s < 6; $s++) {

    $disabled = ($_SESSION['cantidad'][$s] >= 6) ? 'disabled' : ''; //tiene que estar dentro del bucle

     echo"<form method='post'>
        <button type='submit' name='columna' value='$s'<?php echo $disabled; ?>➕</button>
     </form>"; 
}
 echo"<form method='post'>
        <button type='submit' name='eliminar' value=''>Empezar Partida</button>
     </form>"; 

$tablero=$NuevoJuego->getJuegoConecta();


echo"<table>";

for ($i=0; $i < 6 ; $i++) {
     echo"<tr>";
    for ($z=0; $z < 6; $z++) { 

      $cantidad = count($tablero[$z]);      // contar fichas en esta columna
        $indice = $cantidad - (6 - $i); // traducir fila visual a índice del array
        $_SESSION['cantidad'][$z]=count($tablero[$z]);
           
        if ($indice >= 0) {
            // Hay ficha en esta posición
            if ($tablero[$z][$indice] == 1) {
                echo "<td style='background-color:red'></td>";
            } else {
                echo "<td style='background-color:yellow'></td>";
            }
        } else {
            // Celda vacía
            echo "<td style='background-color:white'></td>";
        }
    }
    echo"</tr>";
  
}

print_r($_SESSION['cantidad']);


 if($NuevoJuego->DesbordamientoColumna()){

    "<buttontype='submit' name='columna' value='$s' $disabled></button>";
            
 }

    
echo"</table>";




if(isset($_SESSION['juego'])){


}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
</style>
<body>



</html>