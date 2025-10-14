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
                  "Luis"=>array("nota1"=>"5","nota2"=>"6","nota3"=>"3"),
                  "Andres"=>array("nota1"=>"5","nota2"=>"2","nota3"=>"1"),
                  "Ruben"=>array("nota1"=>"5","nota2"=>"7","nota3"=>"5"),
                  "Jose"=>array("nota1"=>"9","nota2"=>"10","nota3"=>"3")
                );



   $res=0;
  
  echo "<table>";
  echo"<th>Nombre</th>";
    foreach($alumNotas as $clave => $valor){
    
      echo"<tr>";
    
      echo "<td>$clave</td>";
    
        foreach($valor as $notas=>$nota){
          
           echo"<th>$notas</th><td>$nota</td>";
           $res+=$nota;
        }
             $media=$res/3;
         echo"<td>$media</td>";
             $aprovado=$media>=5?"Aprovado":"Suspenso";
         $media=0;
         $res=0;
       
          
         echo"<td>$aprovado</td>";
        echo"</tr>";
        
       
      echo"<br>";
    }
    echo"</table>";
?>