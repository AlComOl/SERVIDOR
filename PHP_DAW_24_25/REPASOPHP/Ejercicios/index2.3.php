<?php
$ar = array("abcd","abc","de","hjjj","g","wer");
$max=0;
$min = PHP_INT_MAX;

foreach ($ar as $valor) {
    if(strlen($valor)<$min){
        $min=strlen($valor);
    }
    if(strlen($valor)>$max){
        $max=strlen($valor);
    }
}

echo"La longitud mas larga es $max y la longitud mas corta es $min";

?>