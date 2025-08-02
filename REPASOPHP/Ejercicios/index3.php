<?php
$contar= array("abcd","abc","de","hjjj","g","wer");

for ($i=0; $i < count($contar) ; $i++) { 
    $menor=1;
    $mayor=2;
   $param=Strlen($contar[$i]);
   if($param > $menor){
        $mayor++;
   }else if($param<$menor){
        $menor--;
   }
   
}
echo "La longitud mas corta es $menor y la longitud más larga es $mayor";
?>