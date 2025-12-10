<style>
img{
    height: 100px;
    width: 100px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Raul Carretero</title>
</head>
<body>
    <form action="" method="post">
        <p>Puedes elegir hasta 6 jugadores y hasta 12 cartas</p>
        <p>
            Introduce el numero de jugadores <input type="number" name="jugadores" min=0>
        </p>
        <p>
            Introduce el numero de cartas <input type="number" name="cartas" min="0">
        </p>

        <br>
        <input type='submit' name='mostrar' value='Mostrar'>
        <input type='submit' name='borrar' value='Borrar'>
    </form>
</body>
</html>

<?php
$texto_familia =["t","p","d","c"];
$limite_cartas = 13;

if( isset($_POST["mostrar"]) ){

    //SI NO PONEMOS NADA EN ALGUN INPUT
    if( empty($_POST["jugadores"]) || empty($_POST["cartas"]) ){
    
        echo "<h2 style='color:red'>NO HAS INTRODUCIDOS VALORES</h2>";
    }
    //SI SUPERAMOS EL LIMITE DE ALGUNO DE LOS DOS VALORES
    elseif ($_POST["jugadores"]>6 || $_POST["cartas"]>12 ){
        
        echo "<h2 style='color:blue'>VALORES FUERA DE RANGO</h2>";
    }
    //SI ESTA TODO CORRECTO
    else{

        echo "<h4> $_POST[jugadores] jugadoras // $_POST[cartas] cartas </h4>";
        
        for ($i=0; $i < $_POST["jugadores"]; $i++) { 
            echo "<p> JUGADOR ".$i+1 ." -> ";
            
            for ($j=0; $j < $_POST["cartas"]; $j++) { 
                $carta_rand = "./img/".$texto_familia[rand(0,3)]."". rand(1,13).".svg";
                echo "<img src='".$carta_rand."'>";
            }
        
            echo "</p>";
        }
    }
}
?>