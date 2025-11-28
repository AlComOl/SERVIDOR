

<?php
//Escribe una frase en minúsculas y la devuelva de forma Kani, por ejemplo:
//"escribe una código que transforme esta frase" ->EsCrIbE UnA CódIgO QuE TrAnSfOrMe eStA FrAsE

$frase="Hola empezamos con los cadenas"; 
 $kani="";
for($i=0;$i<strlen($frase);$i++){
  
    //   if($i%2!==0){
    //     $kani=strtoupper($frase[$i]);
    //   }else{
    //     $kani=strtolower($frase[$i]);
    //   } 
    $kani=$i%2==0?strtoupper($frase[$i]):strtolower($frase[$i]);
       echo"$kani";

}

    

?>