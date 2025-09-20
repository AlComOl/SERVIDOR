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

echo"***************ORDENADOS INVERSO**************** <br>";


rsort($myarray);
print_r($myarray);


    // print_r($myarray);


?>
    
</body>
</html>