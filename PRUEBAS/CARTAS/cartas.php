<?php
session_start();
$_SESSION["cartas"]=[];

for ($i=0; $i < 3; $i++) { 
   
    array_push($_SESSION["cartas"], ["letra" => substr("cdpt", rand(0, 3), 1),"num"   => rand(1, 13)]);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKERSTARS</title>
</head>
<body>
    <?php
        foreach ($_SESSION["cartas"] as $key => $value) {
             echo"<img style='width:160px; height:140px;'src ='./cartasImg/{$value['letra']}{$value['num']}.svg'>";
           
        }

    ?>
</body>
</html>