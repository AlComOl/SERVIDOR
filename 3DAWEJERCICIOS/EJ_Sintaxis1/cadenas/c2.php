<?php

//Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares en letra mayúsculas.

$frase="Hoy han venido a poner la cama, por la mañana ";

for ($i=0; $i <strlen($frase) ; $i++) { 
    
    $newFrase=($i%2!=0)?$frase[$i]:"";

    echo"$newFrase";
}
echo"<br>",

//     A partir de una frase con palabras sólo separadas por espacios, devolver

// Letras totales y cantidad de palabras
// Una línea por cada palabra indicando su tamaño
// echad un vistazo a la función str_word_count
//strlen -> longitud  
//count -> cuenta logitud array
$phrase = "Vamos a mostrar las letras totales de la frase"."<br>";

$phraseArray=explode(" ",$phrase);//pasamos array con separación

print_r($phraseArray);

$palabras=count($phraseArray);//contamos posiciones array (palabras)
echo"<br><br>";
for($i=0;$i<count($phraseArray);$i++){
   echo strlen($phraseArray[$i]);//cuenta cada indice
    echo "<br>";
}
//cuenta el numero de palabras de la frase, tiene que ser un string
$vistazo=str_word_count($phrase);

echo $vistazo;
echo "<br>";

//A partir de una frase, devuelve la cantidad de cada una de las vocales,
//y el total de ellas. Hacedlo de forma tradicional y usando substr_count.

 
$cadena="hola que tal como estas";

for($i=0;$i<strlen($cadena);$i++){

    echo $cadena[$i]."->".substr_count($cadena,$cadena[$i])."<br>";
    echo $cadena[$i]."->".substr_count($cadena,$cadena[$i])."  ,  ";

}
echo"<br>";

echo"De la manera tradicional <br>";
echo"<br>";

$count=0;
for($z=0;$z< strlen($cadena);$z++){
   for ($i=0; $i < strlen($cadena) ; $i++) { 

        $cadena[$z]===$cadena[$i]?$count++:$count;
   }
   echo" $cadena[$z] -> $count";
   $count=0;
}



echo"<h3>Ejercicio 4 </h3>";
echo"ROBOT";

echo"<br><br><br><br><br>";
$robot= "1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";


$robotComponents=explode(";",$robot);




print_r($robotComponents);

echo "<br>";

$flag=true;


for ($i=0; $i < count($robotComponents) ; $i++) { 


    for ($z=0; $z < strlen($robotComponents[$i]); $z++) { 
      
     
       for ($x=0; $x < $z ; $x++) { 
      
       
     
    }
 

 }

}

