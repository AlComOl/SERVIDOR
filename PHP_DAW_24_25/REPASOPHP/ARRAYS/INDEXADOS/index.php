<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays INDEXADOS</title>
</head>
<body>
<?php
//Sintaxis puede escribirse con parentesis
$numeros=array(5,6,7,8,9,"Jose",11,12,13,14);
//o con corchetes de esta manera 
$letras=["a","b","c","d","e","f","g","h","i"];

for($i=0;$i<count($numeros);$i++){
    echo $numeros[$i] ."<br>";
}
?>

<p>.********************************.<p>
<?php
foreach($numeros as $numero){
    echo $numero."<br>";
}
?>
<p>.***********************.<p>
<?php
foreach($numeros as $key => $numero){
echo $numero;    
echo $key;
}
?>
</body>
</html>