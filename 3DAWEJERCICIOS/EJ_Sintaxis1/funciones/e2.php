<?php

// Crea las siguientes funciones:

// Una función que averigüe si un número es par: esPar(int $num): bool

function esPar(int $num){
    if($num%2==0){
        return "es par";
    }else{
        return "no es par";
    }
}


print(esPar(2));

echo"<br>";

// Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre
//  $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array


function tamano(int $tam, int $min,int $max){
    $myarray=[];

    for($i=0;$i<$tam;$i++){
        $num=rand($min,$max);
        array_push($myarray,$num);
    }

    return $myarray;

}

print_r(tamano(5,2,10));

echo"<br>";

// Una función que reciba un $array por referencia y devuelva la cantidad 
// de números pares que hay almacenados: arrayPares(array &$array): int

function numPares(array &$array){
    $count=0;
    $tam=count($array);
    for ($i=0; $i < $tam; $i++) { 

        if($array[$i]%2==0){
            $count++;
        }
        
    }
    $array1=[];
    array_push($array1,$count);
    return $array1;
}


$array2=[2,3,5,6,7,8,89,8,56,3,23];

print_r(numPares($array2));


// Crea las siguientes funciones:
// Una función que devuelva el mayor de todos los números recibidos como 
// parámetros: function mayor(): int. Utiliza las funciones func_get_args(),
// etc... No puedes usar la función max().

function mayor():int{
    if(func_get_arg()>)

}

echo mayor(4, 7, 2, 9, 1);  // debería imprimir 9
echo mayor(4, 7, 2, 9, 1);  // debería imprimir 9
return $mayor;
$mayor = $arrayArgs[0];  // inicializamos con el primero
for ($i = 1; $i < $cantidad; $i++) {
       // comparar $arrayArgs[$i] con $mayor
//     // si $arrayArgs[$i] > $mayor, actualizar $mayor
// }
// Inicializar una variable para el mayor

// Piensa así: para saber cuál es el mayor, podemos:

// Tomar como referencia el primer elemento de $arrayArgs como candidato inicial al mayor.

// Luego recorrer los demás y comparar: si encontramos uno mayor, lo guardamos como nuevo mayor.

// Ejemplo de idea conceptual: