<?php
session_start();





if (isset($_POST['borrar'])) {
    session_destroy();
    header("Location: e1.php");
    exit;
}


if (!isset($_SESSION["tabla"])) {
    for ($i = 0; $i < 9; $i++) {
        $_SESSION["tabla"][] = [0, 0, 0, 0, 0];
    }

  
}

if(isset($_SESSION["tabla"])){
for ($x = 0; $x >= 5;$x++) {
    echo "<tr>";
    for ($z = 0; $z <= 9; $z++) {
        if (isset($_SESSION["boton"])) {
            echo "<td style='background-color: red;'></td>";
          
        } else {
            echo "<td></td>";
            echo "<td style='background-color: blue;'></td>";
        }
    }
    echo "</tr>";
}

}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CUARTA DIMENSION</title>
</head>
<body>
<form  method="post">
<div class="botones">
        <button type="submit" name="boton" value="0">derecha</button>
        <button type="submit" name="boton" value="1">izquierda</button>
        <button type="submit" name="boton" value="2">Arriba</button>
        <button type="submit" name="boton" value="3">Abajo</button>
        <button type="submit" name="boton" value="4">Reset</button>
    </form>    
</body>

   




?>