<?php

echo"<h3>Ejercicio 3 </h3>";

//Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares en letra mayúsculas.

$frase="Hoy han venido a poner la cama, por la mañana ";

for ($i=0; $i <strlen($frase) ; $i++) { 
    
    $newFrase=($i%2!=0)?$frase[$i]:"";

    echo"$newFrase";
}
echo"<br>";

//     A partir de una frase con palabras sólo separadas por espacios, devolver

// Letras totales y cantidad de palabras
// Una línea por cada palabra indicando su tamaño
// echad un vistazo a la función str_word_count
//strlen -> longitud  
//count -> cuenta logitud array

echo"<h3>Ejercicio 4 </h3>";

$phrase = "Vamos a mostrar las letras totales de la frase"."<br>";

$phraseArray=explode(" ",$phrase);//pasamos array con separación

print_r($phraseArray);

$palabras=count($phraseArray);//contamos posiciones array (palabras)

echo"<h3>Ejercicio 5 </h3>";


for($i=0;$i<count($phraseArray);$i++){
   echo strlen($phraseArray[$i]);//cuenta cada indice
    echo "<br>";
}
//cuenta el numero de palabras de la frase, tiene que ser un string
$vistazo=str_word_count($phrase);

echo $vistazo;
echo "<br>";
echo"<h3>Ejercicio 5 </h3>";
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



echo"<h3>Ejercicio 6 </h3>";
echo"ROBOT";



echo"<br><br><br>";
$robot= "1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";

$robotComponents=explode(";",$robot);



for ($i = 0; $i < count($robotComponents); $i++) { //1 5W



        for ($j = 0; $j < strlen($robotComponents[$i]); $j = $j + 2) {//longitud de la cadena


            $segmento = $robotComponents[$i];//cadena para procesar 
            $repe = $segmento[$j];//condicion proximo bucle 
            $dibu = $segmento[$j + 1];//lo que pintará el bucle

            for ($k = 0; $k < $repe; $k++) {


                echo "&nbsp;".$dibu; //genera espacios en html


        }
    }

        echo "<br>";
}

echo"<h3>Ejercicio 7</h3>";

echo "<p></Dado un número cualesquiera, por ejemplo, 1123456789, se trata separar en millares 1.123.456.789, usando funciones de cadenas.>";



$numero=strval(1123456789);


// echo $lon ."<br>";
$reverse="";
for ($i=9; $i >= 0; $i--) {
        if($i%3==0){    
        $reverse.=".";
        }
    $reverse.=$numero[$i];

}

echo"$reverse";


$convert="";

echo"$convert <br>";

for ($z=13; $z >= 0; $z--) { 
     $convert.=$reverse[$z];
}

echo $convert ."<br>";
$con="";
for ($y=0; $y <13 ; $y++) { 
    $con.=$convert[$y];
}
echo"$con";
echo"<br>";
echo "Solucion con strlen";

$num="123456789";

$resultado=$num;
$primera;
$segunda;

for ($i = strlen($num) - 3 ; $i > 0 ; $i-=3)
{
$primera=substr($resultado,0,$i);
$segunda=substr($resultado,$i);

$resultado=$primera.".".$segunda;

}

echo $resultado;

echo "<h3>Ejercicio 8</h3>";