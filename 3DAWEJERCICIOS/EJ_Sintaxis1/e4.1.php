<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Multiplicar</title>
</head>
<style>
    table{
        border:2px solid black;
        width: 270px;
    }
    td{
       border:1px solid black; 
       width: 30px;
       height: 30px;
    }
    tr{
       border:1px solid black;
       /* width: 30px;
       height: 30px; */
    }
    </style>
<body>
    
</body>
</html>

<?php
echo"<table>";
for($i=1;$i<=10;$i++){
      echo"<td style='background-color:red'>".$i."</td>";
    for($z=1;$z<=9;$z++){
        if($i===1){
            echo"<td style='background-color:blue'>".$i*($z+1)."</td>";
        }else{
            echo"<td style='background-color:white'>".$i*($z+1)."</td>";
        }
    }
    echo"</tr>";
}
echo"</table>";


?>
