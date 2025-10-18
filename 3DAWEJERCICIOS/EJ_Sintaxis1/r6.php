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
        width: 200px;
        height: 200px;
    }
    td,tr{
        text-align:center;
    }
    </style>
</html>

<?php

$deportes=array("Futbol"=>5,"Balocesto"=>6,"Tenis"=>7);


foreach ($deportes as $key => $value) {
    $v[]=$value;
}
    $mayor=max($v);



echo"<table>";
echo"<th>Deporte</th>";
echo"<th>Votos</th>";

$res=0;

foreach($deportes as $deporte => $votos){
    echo"<tr>";
    
     
    if($votos===$mayor){
         echo"hola";
         echo"<td><strong>$deporte</strong></td>";
         echo"<td><strong>$votos</strong></td>";
    }else{
         echo"<td>$deporte</td>";
         echo"<td>$votos</td>";
    }
}
    
 

?>