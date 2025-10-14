<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$alumNotas=array("Ana"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9"),
                  "Luis"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9"),
                  "Andres"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9"),
                  "Ruben"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9"),
                  "Jose"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9")
                );



    echo "<table>";
    echo"<tr>";
    echo"Nombres";
    foreach($alumNotas as $clave => $valor){
      echo "$clave <br>";
        foreach($valor as $notas){
           echo"<td>$notas</td>";
        }
        echo"<tr>";
    }
    echo"</table>";
?>