<?php
include("./logicaConecta.php");
session_start();

if(isset($_POST['eliminar'])){//borrar $de sesion
    session_destroy();
}

if(!isset($_SESSION['juego'])){//Si no esiste la sesion la instancia dentro de la $sesion
    $_SESSION['juego']=new Conecta();//lo serializa y lo mete todo  dentro del 
}
$NuevoJuego=$_SESSION['juego']; //unserializarse

if(isset($_POST["columna"])){
    $NuevoJuego->insertarFila($_POST["columna"]);
      $_SESSION['juego'] = $NuevoJuego;

}
echo"<br><br><br><br><br>";

print_r($NuevoJuego);



echo"<br><br><br><br><br>";

for ($s=0; $s < 6; $s++) {

     echo"<form method='post'>
        <button type='submit' name='columna' value='$s'>➕</button>
     </form>"; 
}
 echo"<form method='post'>
        <button type='submit' name='eliminar' value=''>Empezar Partida</button>
     </form>"; 

echo"<table>";
for ($i=0; $i < 6 ; $i++) {
     echo"<tr>";
    for ($z=0; $z < 6; $z++) { 
       echo"<td></td>";
        
    }
    echo"</tr>";
}

echo"</table>";


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
    /* display: flex;
    justify-content: center;
    align-items: center; */
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



</body>
</html>