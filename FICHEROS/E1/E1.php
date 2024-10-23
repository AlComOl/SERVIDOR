<?php
//  $fitxer=fopen("notasalumnos.csv", "r");
//  while(!feof($fitxer)){
//     $line = fgets($fitxer);
//      echo $line.'<br>';
    
//  }
//  fclose($fitxer);


 $fichero= fopen("notasalumnos.csv","r"); 


 
 while(!feof($fichero)&&(!fclose($fichero))){

    $dividido=explode(",", $fichero,3);;
    
 }

 echo()


?>