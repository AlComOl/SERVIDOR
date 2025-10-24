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

}


//foreach
