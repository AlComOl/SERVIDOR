<!-- Dada la siguiente cadena se trata de dibujar el siguiente retrato robot $robot=
"1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/"; Genera espacios vacios en html "
". Funciones interesantes explode, strln  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot</title>
</head>
<body>
    <?php

$robot="1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";

$trozos = explode(";", $robot); //[ 1 9W; 1 1|2 1o1 1o2 1|; 1@4 1U4 1@; 1 1|2 3=2 1|; 2 1\5_1/ ]



for ($i = 0; $i < count($trozos); $i++) { //1 5W

$parte = strlen($trozos[$i]);
for ($j = 0; $j < $parte; $j = $j + 2) {


$segmento = $trozos[$i];



$repe = $segmento[$j];
$dibu = $segmento[$j + 1];




for ($k = 0; $k < $repe; $k++) {


echo "&nbsp;".$dibu; //genera espacios en html


}
}

echo "<br>";
}










// $partesRot=explode(";",$robot);






//     # code...

 

// for ($i=0; $i < count($partesRot); $i++) { 

//     $parte1=$partesRot[$i];

//     for ($j=1; $j < strlen($parte1)  ; $j+=2) { 
        
//        print_r($parte1[$i]);
       
//     }
    
// }  



   



   
  
   
   

    
    
 
    
   





?>
</body>
</html>