
<?php

$cartas=scandir("./cartas");
$corazones=0;
$picas=0;
$treboles=0;
$diamantes=0;

for($i=0;$i<6;$i++){//iteramos 6 veces
    //sacamos a  carta un indice aleatorio de los ficheros que hay en cartas  
    $carta=array_rand($cartas);
    $palabra=$cartas[$carta][0];
    $archivoCarta=$cartas[$carta];//ese indice del array cartas es el fichero que mostramos
   
    echo "<img style='height:100px;weidth:100px' src='./cartas/$archivoCarta' />";

    $letra=$archivoCarta[0];
   
    switch ($letra) {
        case 'c':
            $corazones++;
        break;
        case 'p':
            $picas++;
         break;    
        case 't':
            $treboles++;
        break;
        case 'd':
            $diamantes++;
        break;
           
        default:
            # code...
            break;
    }
 }

 echo " <br> corazones: $corazones treboles: $treboles picas: $picas diamantes $diamantes";


?>