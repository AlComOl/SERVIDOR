<?php
$letras=array("abcd","abc","de","hjjj","g","wer");


for ($i=0; $i < count($letras) ; $i++) { 
    echo"$i [ ";
    $cont=0;
    for ($z=0; $z < strlen($letras[$i]) ; $z++) { 
        
        $cont++;
    }
    echo"<span style='color:red'>$cont</span> ] ";
    $cont=0;
   }


?>