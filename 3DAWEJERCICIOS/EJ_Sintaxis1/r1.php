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
$alumNotas=array("Ana"=>array("nota1"=>"10","nota2"=>"10","nota3"=>"9"),
                  "Luis"=>array("nota1"=>"10","nota2"=>"9","nota3"=>"9"),
                  "Andres"=>array("nota1"=>"5","nota2"=>"2","nota3"=>"1"),
                  "Ruben"=>array("nota1"=>"5","nota2"=>"7","nota3"=>"5"),
                  "Jose"=>array("nota1"=>"3","nota2"=>"2","nota3"=>"3")
                );



   $res=0;
  
  echo "<table>";
  echo"<th>Nombre</th>";
  echo"<th>Nota1</th>";
  echo"<th>Nota2</th>";
  echo"<th>Nota3</th>";
  echo"<th>Media</th>";
  echo"<th>Resultado</th>";

    foreach($alumNotas as $clave => $valor){
   
      echo"<tr>";
    
      echo "<td>$clave</td>";
 
     
      
        foreach($valor as $notas=>$nota){
 
          
           echo"<td>$nota</td>";
           $res+=$nota;
        }
         $media=$res/3;
         echo"<td>$media</td>";
         $aprobado=$media>=5?"Aprovado":"Suspenso";
         
        
       
         if($media>=8){ 
             echo"<td style='color:green'>$aprobado</td>";
         }else{
             echo"<td style='color:black'>$aprobado</td>";
         }
          $media=0;
         $res=0;
        echo"</tr>";   
      echo"<br>";
    }
    echo"</table>";
?>