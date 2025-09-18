<?php

$array= array("abcd","abc","de","hjjj","g","wer");

$longitud=count($array);
for ($i=0; $i < $longitud; $i++) {
    for ($z=0; $z < strlen($array[$i]); $z++) { 
        $valor= strlen($array[$z]);
        if($valor>1){
            $mayor=$valor;

        }else{

        }
    }
    print_r($valor);
}


?>

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