<!-- ⦁	1.- Escribe una frase en minúsculas y la devuelva de forma Kani, por ejemplo:
"escribe un código que transforme esta frase" ->EsCrIbE UnA CódIgO QuE TrAnSfOrMe eStA FrAsE -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANI</title>
</head>
<body>
<?php

$miFrase="mañana es lunes";
$lon = strlen($miFrase);
$newFrase="";

for ($i=0; $i < $lon; $i++) { 
    if($i%2==0){
        $newFrase.=strtoupper($miFrase[$i]);  
    }else{
        $newFrase.=strtolower($miFrase[$i]);
    }
    
}

echo("La frase cani es : ".$newFrase);


?>
</body>
</html>