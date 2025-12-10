<?php
 $fitxer=fopen("datos.txt", "r");
    while(!feof($fitxer)){
       $line = fgets($fitxer);
       echo $line;
    }
    fclose($fitxer);
?>