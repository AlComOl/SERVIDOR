<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <style>
    table{
      border:2px solid black;
    }
    td{
      width: 30px;
      height: 30px;
      border:2px solid black;
      

    }
    tr{
      width: 30px;
      height: 30px;
      border:2px solid black;
    }
  </style>
    
</body>
</html>

<?php
$alumNotas=array("Ana"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9"),
                  "Luis"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9"),
                  "Andres"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9"),
                  "Ruben"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9"),
                  "Jose"=>array("nota1"=>"6","nota2"=>"7","nota3"=>"9")
                );



   $res=0;
  
  echo "<table>";
    foreach($alumNotas as $clave => $valor){
      echo"<tr>";
      echo "<td>$clave</td>";
    
        foreach($valor as $notas){
           echo"<td>$notas</td>";
           $res+=$notas;
        }
        $media=$res/3;
         echo"<td>$media</td>";
        echo"</tr>";
       
      echo"<br>";
    }
    echo"</table>";
?>