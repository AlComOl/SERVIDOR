<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
    table{
        border:1px solid black;
    }
    tr,td{
        border:1px solid black;
    }
</style>

<?php


$continentes = array(
array("continente"=>"Europa", "paises"=>array(array("pais"=>"España", "capital"=>"Madrid", "bandera"=>"img/espana.png"), array("pais"=>"Reino Unido", "capital"=>"Londres", "bandera"=>"img/reinounido.png"), array("pais"=>"Suecia", "capital"=>"Estocolmo", "bandera"=>"img/suecia.png"))),
array("continente"=>"América", "paises"=>array(array("pais"=>"Perú", "capital"=>"Lima", "bandera"=>"img/peru.png"), array("pais"=>"Canadá", "capital"=>"Ottawa", "bandera"=>"img/canada.png"))),
array("continente"=>"África", "paises"=>array(array("pais"=>"Chad", "capital"=>"Yamena", "bandera"=>"img/chad.png"), array("pais"=>"Uganda", "capital"=>"Kampala", "bandera"=>"img/uganda.png"))),
array("continente"=>"Asia", "paises"=>array(array("pais"=>"China", "capital"=>"Pekín", "bandera"=>"img/china.png"), array("pais"=>"Japón", "capital"=>"Tokio", "bandera"=>"img/japon.png"))),
array("continente"=>"Oceanía", "paises"=>array(array("pais"=>"Australia", "capital"=>"Canberra", "bandera"=>"img/australia.png")))
);


foreach ($continentes as $continente ) {

   echo"<table>";
   echo"<th>Pais</th>";
   echo"<th>Capital</th>";
   echo"<th>Bandera</th>";

   echo"<h1>$continente[continente]</h1>";
   echo"<tr>";

   foreach ($continente['paises'] as $paises) {

    
    
        echo"<td>$paises[pais]</td><td>$paises[capital]</td><td><img src='$paises[bandera]'></img></td>";

        echo"</tr>";
   }

   
}







?>