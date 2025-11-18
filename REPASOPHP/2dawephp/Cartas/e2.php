<?php
session_start();

$cartas = [1, 2, 3];

if (isset($_POST["iniciar"])) {
    
    echo "<p>";
    for ($i = 0; $i < 3; $i++) { 
     
        $cartaAleatoria = "./cartas/t" . rand(1, 13) . ".svg";
        echo "<img style='height: 100px; width: 100px' src=" . $cartaAleatoria .">"; 
       
        echo "<input type='submit' name='barajar.$i' value='barajar'>";
    }
    echo "</p>";

    if (isset($_POST["barajar0"])) {
            $cartaAleatoria0 = "./cartas/t" . rand(1, 13) . ".svg";
            echo "<img style='height: 100px; width: 100px' src=" . $cartaAleatoria1 . ">";
        }
    
     if (isset($_POST["barajar1"])) {
            $cartaAleatoria2 = "./cartas/t" . rand(1, 13) . ".svg";
            echo "<img style='height: 100px; width: 100px' src=" . $cartaAleatoria1 . ">";
        }
        
    if (isset($_POST["barajar3"])) {
        $cartaAleatoria2 = "./cartas/t" . rand(1, 13) . ".svg";
        echo "<img style='height: 100px; width: 100px' src=" . $cartaAleatoria1 . ">";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
</head>

<body>
    <form action="" method="post">
        <p>
            <input type="submit" name="iniciar" value="Iniciar Partida">
            <input type="submit" name="borrar" value="Nueva Partida">
        </p>

    </form>
</body>

</html>