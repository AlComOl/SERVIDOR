<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,tr,th{
        border:1px solid black;
    }
</style>
<body>
    
</body>
</html>

<?php
//Dado el siguiente array se tratará de mostrar los paises de algunos continentes y sus banderas.


$continentes = array(
array("continente"=>"Europa", "paises"=>array(array("pais"=>"España", "capital"=>"Madrid", "bandera"=>"img/espana.png"), array("pais"=>"Reino Unido", "capital"=>"Londres", "bandera"=>"img/reinounido.png"), array("pais"=>"Suecia", "capital"=>"Estocolmo", "bandera"=>"img/suecia.png"))),
array("continente"=>"América", "paises"=>array(array("pais"=>"Perú", "capital"=>"Lima", "bandera"=>"img/peru.png"), array("pais"=>"Canadá", "capital"=>"Ottawa", "bandera"=>"img/canada.png"))),
array("continente"=>"África", "paises"=>array(array("pais"=>"Chad", "capital"=>"Yamena", "bandera"=>"img/chad.png"), array("pais"=>"Uganda", "capital"=>"Kampala", "bandera"=>"img/uganda.png"))),
array("continente"=>"Asia", "paises"=>array(array("pais"=>"China", "capital"=>"Pekín", "bandera"=>"img/china.png"), array("pais"=>"Japón", "capital"=>"Tokio", "bandera"=>"img/japon.png"))),
array("continente"=>"Oceanía", "paises"=>array(array("pais"=>"Australia", "capital"=>"Canberra", "bandera"=>"img/australia.png")))
);
?>

<table>
    <tr>
        <th>País</th>
        <th>Capital</th>
        <th>Bandera</th>
    </tr>
    
<?php

foreach ($continentes as $continente) {


    echo $continente['continente'] ."<br>";

    foreach ($continente as $paises) {

        foreach ($paises as $pais) {

            echo"<br>";

            foreach ($pais as $key => $value) {

               
                echo"<tr>";

                echo'<th>'.$key.'</th><th>'. $value .'</th>';
                

                echo"</tr>";
            }
            
            
        }  
    }
}
?>
</table> 