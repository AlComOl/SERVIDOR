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

$phrase = " Vamos a mostrar las letras totales de la frase "."<br>";


//quita los espacion 
$cadenaSinEspacios=str_replace(" ", "",$phrase);

echo"Devuelve la frase sin espacion $cadenaSinEspacios";

//contar las palabras de la cadena 
$count=0;

$phrase1=trim($phrase);

// echo"$phrase";
// echo"$phrase1";

for($z=0;$z<strlen($phrase1);$z++){

    $palabrasFrase=($phrase1[$z]===" ")?$count++:$count;

}
echo "devuelve el numero de palabras de la frase". ++$palabrasFrase;

