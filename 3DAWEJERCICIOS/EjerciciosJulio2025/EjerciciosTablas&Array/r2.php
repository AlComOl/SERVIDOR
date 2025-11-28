<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades</title>
</head>
<style>

    table{
       border:1px solid black;
    }
    tr,td{
       border:1px solid black;  
       text-align:center; 
    }
    td{
      
    }
</style>
<body>
    
</body>
</html>



<?php
$count=0;   
$ciudades = array(
    array("comunidad" => "Andalucía", "provincia" => "Sevilla", "capital" => "Sevilla"),
    array("comunidad" => "Comunidad Valenciana", "provincia" => "Valencia", "capital" => "Valencia"),
    array("comunidad" => "Madrid", "provincia" => "Madrid", "capital" => "Madrid"),
    array("comunidad" => "Cataluña", "provincia" => "Barcelona", "capital" => "Barcelona"),
    array("comunidad" => "Galicia", "provincia" => "A Coruña", "capital" => "Santiago de Compostela"),
    array("comunidad" => "Castilla y León", "provincia" => "Valladolid", "capital" => "Valladolid"),
    array("comunidad" => "Aragón", "provincia" => "Zaragoza", "capital" => "Zaragoza"),
    array("comunidad" => "País Vasco", "provincia" => "Bizkaia", "capital" => "Vitoria-Gasteiz"),
    array("comunidad" => "Canarias", "provincia" => "Santa Cruz de Tenerife", "capital" => "Las Palmas de Gran Canaria"),
    array("comunidad" => "Murcia", "provincia" => "Murcia", "capital" => "Murcia")
);
echo"<table>";
echo"<th>Comunidad</th>";
echo"<th>Provincia</th>";
echo"<th>Capital</th>";

foreach($ciudades as $comunidad =>$value){
  $count++;
    if($count%2==0){
    echo"<tr style='color:blue'>";
    echo"<td>$value[comunidad]</td><td>$value[provincia]</td><td>$value[capital]</td> ";
    }else{
    echo"<tr style='color:red'>";
    echo"<td>$value[comunidad]</td><td>$value[provincia]</td><td    >$value[capital]</td> ";
    }
   
    
    
}
echo"</tr> ";


echo"</table>";




?>
