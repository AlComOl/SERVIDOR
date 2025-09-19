<!-- Rellena un array de 50 valores de forma aleatoria, mostrándolos por pantalla.
Por cosas de la vida, nos interesa ver esos ordenados de  forma ascendiente y también descendiente. -->
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
//declaro array

$miarray=[];

//introduzco valores aleatorios con for

for ($i=0; $i < 50; $i++) { 
    $miarray[$i]=rand(1,50);
}
foreach($miarray as $value) {
    print_r($value." ,");
}
$media=0;
$sum=0;
$min=0;
$max=0;
$min=$miarray[0];//el primer valor del array será el min
$max=$miarray[0];
for ($i=0; $i <50 ; $i++) { 
    $sum+=$miarray[$i];
;    if($miarray[$i]<$min){
        $min=$miarray[$i];
    }
    if($miarray[$i]>$max){
        $max=$miarray[$i];
    }
}
$media=($sum/$i);
echo("<br>"."El numero menor del array es :".$min."<br>");
echo("El numero menor del array es :". $max."<br>");

// Usando el código del ejercicio anterior, nos interesa conocer el mínimo, máximo y la media.
echo($i);
echo("La media de los numeros del array es ".$media);

?>