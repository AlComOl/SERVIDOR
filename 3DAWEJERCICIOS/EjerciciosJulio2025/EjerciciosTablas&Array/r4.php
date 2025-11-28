<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border:2px solid black;
        width:270px;
        height: 270px;
    }
    tr,td{
        border:2px solid black;
        width: 30px;
        height: 30px;

    }
</style>
<body>
    
</body>
</html>
<table>
<?php
$r=0;$g=0;$b=0;


   
        for($i=0;$i<5;$i++){
            $r+=50;
            echo"<tr>";
            for($z=0;$z<5;$z++){
                $g+=50;
                echo"<td style='background-color:rgb($r,$g,0);'></td>";  
            }
              echo"</tr>";
        }  
?>
</table>