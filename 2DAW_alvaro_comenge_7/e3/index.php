<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruz</title>
    <style>
        body {
            text-align: center;
        }
        .punto {
            font-size: 60px;
            width: 60px;
        }
    </style>
</head>
<body>

<form method="post">
    Tamaño (1-25):
    <input type="number" name="tam"><br><br>

    Color:
    <select name="color">
        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue">Azul</option>
    </select><br><br>

    <button type="submit">Dibuja Cruz</button>
</form>

<?php

if (isset($_POST["tam"])) {

    $tam = $_POST["tam"];
    $col = $_POST["color"];

    if ($tam < 1 || $tam > 25) {
        echo "<p style='color:red'>Pon un número entre 1 y 25</p>";
    } else {

        $mitad = ($tam - 1) / 2;

        for ($i=0; $i<$tam; $i++) {
            for ($a=0; $a<$tam; $a++) {
                if ($i == $mitad || $a == $mitad) {
                    echo "<span class='punto' style='color:$col'>.</span>";
                } else {
                    echo "<span class='punto'> </span>";
                }
            }
            echo "<br>";
        }

    }
}

?>
</body>
</html>
