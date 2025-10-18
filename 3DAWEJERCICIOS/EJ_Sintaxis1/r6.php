<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<style>
    table{
        border: 1px solid black;
    }
    td,tr{
        text-align:center;
    }
    </style>
</html>

<?php

$deportes=array("Futbol"=>5,"Balocesto"=>6,"Tenis"=>7);
echo"<table>";
echo"<th>Deporte</th>";
echo"<th>Votos</th>";

foreach($deportes as $deporte => $votos){
    echo"<tr>";
    echo"<td>$deporte</td><td>$votos</td><br>";
    echo"</tr>";
}


?>