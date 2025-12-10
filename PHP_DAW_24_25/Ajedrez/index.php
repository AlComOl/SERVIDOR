<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylo.css">
    <title>AJEDREZ</title>
</head>
<body>
    
<table>
<?php
$columna=9;
$fila=9;
$color=true;
$i=0;
$j=0;


for($i=0;$i<$fila;$i++){
   echo" <tr>";
    for($j=0;$j<$columna;$j++){
       
        if(($i+$j)%2==0){
            echo"<td style=background-color:red> </td>"; 
        }else{
            echo"<td> </td>";
        }
    }
    echo"</tr>";
}

?>
</table>




    
</body>
</html>

