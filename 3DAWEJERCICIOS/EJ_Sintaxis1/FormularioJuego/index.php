<?php
session_start();

if(isset($_POST['borrar'])){

    session_destroy();

 
}

if(empty($_POST['jugadores']) || empty($_POST['cartas'])){

    echo"<h2 class='rojo'>No has introducido número de jugadores o cartas cartas a repartir</h2>";

}
if(isset($_POST['jugadores'])){

        if($_POST['jugadores'] > 6){
        echo"<h2 class='azul'>La cantidad de jugadores esta fuera de rango</h2>";

        }
}

if(isset($_POST['cartas'])){

    if($_POST['cartas'] > 12){
        echo"<h2 class='azul'>La cantidad de cartas esta fuera de rango</h2>";
    }

}
 
if(isset($_POST['jugadores']) && $_POST['cartas']){

    if($_POST['cartas']%$_POST['jugadores']===0){
        $cartasPorJugador=$_POST['cartas']/$_POST['jugadores'];
        echo"El numero de cartas por jugador es:$cartasPorJugador";
    }else{
        echo"El numero de cartas no permite el juego";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
</head>
<style>
    .form{
        background-color:green;
        width: 500px;
        height:200px;
    }
    p,button{
       
        margin:10px;
    }
   
    input{
        margin-left:20px;
    }
    .rojo{
        color:red;

    }
    .azul{
        color:blue;
    }
</style>
<body>
    <div class="form">
        <p>Puedes elegir hasta 6 jugadores y 12 cartas</p>
        <form method="post">
            <p><strong>Introduce número de jugadores:</strong></p><input type="number" name="jugadores" value="">
            <p><strong>Introduce número de cartas:</strong></p><input type="number" name="cartas" value="">
            <button name="mostrar">Mostrar</button><button name="borrar">Borrar</button>
        </form>
    </div>
    
</body>
</html>