<?php
$cadenas=array("abcdr","","","hjj","g","wer");
    $min=0;
    $max=0;
foreach ($cadenas as $cadena=>$letras) {
    echo"$cadena [ ";
   
    $count=0;
    foreach (str_split($letras) as $letra) {
        echo"$letra";
        $count++;
    if($count<$min){
        $min=$count;
        
    }elseif($count>$max){
        $max=$count;
    }
    }
    
   
    echo " ] <br>";
}

echo "La longitud más corta es $min y la mas larga es ".$max;

?>