
<?php

$cartas=scandir("./cartas");

for($i=0;$i<6;$i++){//iteramos 6 veces
    //sacamos a  carta un indice aleatorio de los ficheros que hay en cartas  
    $carta=array_rand($cartas);
    $archivoCarta=$cartas[$carta];//ese indice del array cartas es el fichero que mostramos
    echo "<img style='height:100px;weidth:100px' src='./cartas/$archivoCarta' />";
 }



?>