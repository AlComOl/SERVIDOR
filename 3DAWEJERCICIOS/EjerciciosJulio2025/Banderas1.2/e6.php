<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

<?php
for ($i=1; $i < 51 ; $i++) { 
    $myarray[]=rand(1,50);
}
foreach ($myarray as $key => $value) {
    echo"$value , " ;
}

echo"***************ORDENADOS**************** <br>";

sort($myarray);

print_r($myarray);
echo "<br>";
echo"***************ORDENADOS INVERSO**************** <br>";


rsort($myarray);
print_r($myarray);
echo "<br>";
echo"******************************MINIMO MAXIMO MEDIA**************** <br>";

echo max($myarray);
echo"<br>";
echo min($myarray);
echo"<br>";
$item=0;
for ($i=0; $i < 50; $i++) { 
    $item+=$myarray[$i];
    echo"$item ,";
}
echo"suma $item";
$media=$item/50;
echo"<br>";

echo"media $media";
echo"<br>";
echo"***********************************otra manera de hacerlo*******************************";

$value=round(array_sum($myarray)/count($myarray));
echo" <br>";
echo"media $value";
?>
    
</body>
</html>