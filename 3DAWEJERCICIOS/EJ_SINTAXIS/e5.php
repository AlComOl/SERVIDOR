<?php

$myarray=[0,0,0,0,0,0,0,0,0];
for ($i=0; $i < 8; $i++) { 
   $myarray1[]=$myarray; 
    
}

for ($i=1; $i < 11; $i++) {
    echo"<br>";
    for ($z=1; $z < 11; $z++) { 
      $myarray1[$i][$z]=$i*$z;
      print_r($myarray1[$i][$z]);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <?php
            for ($i=1; $i < 11; $i++) {
                echo"<tr style='border:20px solid black;width:30px; heigth:30px;'>"; 
                for ($z=1; $z <11 ; $z++) { 
                     echo"<td style='border:20px solid black; width:30px; height: 30px;'>".$myarray1[$i][$z]."</td>"; 
                }
                echo"</tr>";
            }

        ?>
    </table>
</body>
</html>