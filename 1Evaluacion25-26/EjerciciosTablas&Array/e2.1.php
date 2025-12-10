<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajedrez</title>
</head>
<style>
    table{
        width: 270px;
       border :2px solid black;
    }

    tr,td{
    width: 30px;
    height: 30px;
    border :2px solid black;  
    }


</style>
<body>
    
</body>
</html>


<?php
echo"<table>";
for ($i=0; $i < 9; $i++) {
    echo"<tr>";
    for ($z=0; $z < 9 ; $z++) {
        if(($i+$z)%2===0){ 
          echo"<td style='background-color:white;'></td>";    
        }else{
          echo"<td style='background-color:black;'></td>";  
        }

    } 
    echo"</tr>";
}



?>