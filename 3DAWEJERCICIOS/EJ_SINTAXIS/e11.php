<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,tr,td{
        border:1px solid black;
    }
</style>
<body>
    
</body>
</html>
<table>
<?php
$rgb=-50;
$hexa=0;

 
    
    for ($i=0; $i < 36; $i++) { 
        echo"<tr>";
        for ($z=0; $z < 6; $z++) { 
        
            $rgb+=50;
        echo'<td>'.$hexa=dechex($rgb).'</td>';
        }
        echo"</tr>";
    }

?>
</table>