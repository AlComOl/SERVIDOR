<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays ASOCIATIVOS</title>
</head>
<body>
 <?php
 //puede ponerse con parentesis o con corchetes 
 $camp = array ("Campo Satsuma"=>"poligono 23","Campo Okisu"=> "poligono 32", "Campo Kaki" => "poligono 32", "Campo Navelina" => "poligono 43");

 $campos =["Campo Satsuma"=>"poligono 23","Campo Okisu"=> "poligono 32", "Campo Kaki" => "poligono 32", "Campo Navelina" => "poligono 43"];

 $elimina= array ("Campo Satsuma"=>"poligono 23","Campo Okisu"=> "poligono 32", "Campo Kaki" => "poligono 32", "Campo Navelina" => "poligono 43");
 // en este tipo de arrays ya no se debe trabajar con el bucle for , mejor con el foreach


 foreach($campos as $campo => $poligono){
    echo "El ".$campo. " es el   ".$poligono ."<br>";

 }
//in_array lo recorre y evalua si esta el valor en el array
 if(in_array ("poligono 23" , $campos)){
    echo "<p>La parcela este en el array<p>";
 }else{
    echo "<p>La parcela no esta </p>";
 }

//  Función 	                    Descripción
// $claves = array_keys($array) 	Devuelve las claves del $array asociativo.
?>
<p>aray_Keys<p>
<?php
$claves = array_keys($camp);
print_r($claves);

// $tam = count($array) 	        Devuelve el tamaño de $array.
?>
<p>$cont($array)<p>
<?php
$tam= count($camp);
print_r($tam);

// sort($array) 	                Ordena los elementos de $array.

?>
<p>sort<p>
<?php
sort($camp);
print_r($camp);
// unset($array[elemento])       	Elimina el elemento del array (deja un hueco). Por ejemplo: unset($miArray[1]);
?>
<p>unset<p>
<?php
unset($elimina["Campo Kaki"]);
print_r($elimina);

 ?>   
</body>
</html>