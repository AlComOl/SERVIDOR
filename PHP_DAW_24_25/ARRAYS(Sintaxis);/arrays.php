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
<?php
/*Dado el siguiente array se trata de visualizar todas las provincias (falta algunas) , aquellas menores de 500 rayos se mostraran en verde y de color rojo caundo sean mayores , tambien debera mostrarse el total <acumulado acumulado*/

/*$comunidadesAutonomas = array(
array("comunidad" => "Andalucía", "provincias" => array("Córdoba" => 7223, "Huelva" => 1611, "Cádiz" => 480, "Sevilla" => 12990, "Málaga" => 16458, "Granada" => 8622, "Jaén" => 322, "Almería" => 8266)),
array("comunidad" => "Aragón", "provincias" => array("Huesca" => 251, "Teruel" => 1633, "Zaragoza" => 2512)),
array("comunidad" => "Asturias", "provincias" => array("Oviedo" => 256)), array("comunidad" => "Baleares", "provincias" => array("Baleares" => 503)),
array("comunidad" => "Canarias", "provincias" => array("Santa Cruz de Tenerife" => 153, "Las Palmas de Gran Canaria" => 2451)), array("comunidad" => "Cantabria", "provincias" => array("Santander" => 6511)), array("comunidad" => "Castilla La-Mancha", "provincias" => array("Albacete" => 121, "Ciudad Real" => 4241, "Cuenca" => 221, "Guadalajara" => 3211, "Toledo" => 4211)), array("comunidad" => "Castilla y León", "provincias" => array("León" => 231, "Zamora" => 5231, "Salamanca" => 2311, "Valladolid" => 231, "Palencia" => 7621, "Ávila" => 321, "Segovia" => 251, "Burgos" => 5321, "Soria" => 1251)), array("comunidad" => "Cataluña", "provincias" => array("Barcelona" => 19240, "Gerona" => 11535, "Lérida" => 6052, "Tarragona" => 255)), array("comunidad" => "Extremadura", "provincias" => array("Cáceres" => 3405, "Badajoz" => 210)), array("comunidad" => "Galicia", "provincias" => array("A Coruña" => 1512, "Ourense" => 1612, "Lugo" => 1930, "Pontevedra" => 124)), array("comunidad" => "Madrid", "provincias" => array("Madrid" => 248000)), array("comunidad" => "Murcia", "provincias" => array("Murcia" => 2100)), array("comunidad" => "Navarra", "provincias" => array("Pamplona" => 19587)), array("comunidad" => "Comunidad Valenciana", "provincias" => array("Valencia" => 19587, "Alicante" => 5342, "Castellon" => 466)), array("comunidad" => "País Vasco", "provincias" => array("Bilbao" => 124, "San Sebastián" => 8124, "Vitoria" => 259)), array("comunidad" => "La Rioja", "provincias" => array("Logroño" => 1081)) );

$c=0;
foreach ($comunidadesAutonomas as $comunidadesAutonoma) {
    echo '<h2>'. $comunidadesAutonoma['comunidad'].': </h2>';
    

    foreach ($comunidadesAutonoma['provincias'] as $prov => $ray) {
        
         $c=$c+$ray;
        echo '<br>';
        if($ray<500){
            echo  $prov .' ;'.'<p style="color:green";>'.$ray.'</p>';
            
        }else{
            echo  $prov .' ;'.'<p style="color:red";>'.$ray.'</p>';
        }
        
       
     
    }
    echo '<p>Rayos totales por comunidad :'.$c.'<p>';

}*/

//Dado el siguiente array de países y sus principales ciudades, 
//se trata de visualizar todas las ciudades. Aquellas con una población
// menor a 1 millón de habitantes se mostrarán en verde, y en rojo aquellas 
//con una población mayor. Además, debe mostrarse el total acumulado de la población por país.



$paises = array(
    array("pais" => "España", "ciudades" => array("Madrid" => 3223000, "Barcelona" => 1620000, "Valencia" => 800000)),
    array("pais" => "Francia", "ciudades" => array("París" => 2148000, "Marsella" => 861000, "Lyon" => 513000)),
    array("pais" => "Italia", "ciudades" => array("Roma" => 2873000, "Milán" => 13689, "Nápoles" => 962000)),
    array("pais" => "Alemania", "ciudades" => array("Berlín" => 3669000, "Múnich" => 1472000, "Fráncfort" => 753056))
);

foreach ($paises as $pais) {
    echo $pais['pais'].':'.'<br>';
    foreach ($pais['ciudades'] as $ciudad => $hab) {
        if($hab<1000000){
        echo '<p style="color:green">'.$ciudad ."=>". $hab.'</p>'.'<br>';
        }else{
        echo '<p style="color:red">'.$ciudad ."=>". $hab.'</p>'.'<br>';   
        }
    }
    echo '<br>';
}


/*Crea un array multidimensional que represente el inventario de una tienda de tecnología. La tienda vende diferentes tipos de productos 
(por ejemplo, laptops, smartphones, tablets), y cada tipo de producto tiene varias marcas 
(por ejemplo, Apple, Samsung, Lenovo). Para cada marca, se debe almacenar información sobre el modelo y el precio.

Tu tarea es:

    Crear el array que almacene esta información.*/

    $tiendas=array(
    array("producto"=>"laptops", "marca" => array("Lenovo"=>1500 ,"Apple"=>1600, "Asus"=>900 )),
    array("producto"=>"smartphones","marca" => array("Lenovo"=>1500 ,"Apple"=>1600, "Asus"=>900 )),
    array("producto"=>"tablets","marca" => array("Lenovo"=>1500 ,"Apple"=>1600, "Asus"=>900 )));

 
    /*Mostrar todos los productos disponibles, mostrando el tipo de producto, la marca, el modelo y su precio.
    Calcular el precio promedio de todos los productos de una marca específica (por ejemplo, Apple).*/

    foreach ($tiendas as $tienda) {
        echo $tienda["producto"]." :"."<br>";
        foreach ($tienda["marca"] as $marca=>$precio) {
          echo $marca."=>". $precio."<br>";
        }
    }
    


?>