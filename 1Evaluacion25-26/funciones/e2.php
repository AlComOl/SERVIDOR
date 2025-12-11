<?php

echo"<h3> Crea las siguientes funciones:</h3>";

echo"<h3> Una función que averigüe si un número es par: esPar(int \$num): bool. <br> </h3>";

function esPar(int $num){
    if($num%2==0){
        return "es par";
    }else{
        return "no es par";
    }
}


print(esPar(2));

echo"<br>";

echo"<h3>Una función que devuelva un array de tamaño \$tam con números aleatorios comprendido entre
  \$min y \$max : arrayAleatorio(int \$tam, int \$min, int \$max) : array </h3>";


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

echo"SOLUCIÓN JULIO";

echo"<br>";

function arrayAleatorio(int $tam, int $min, int $max): array
{

    $nuevo = [];

    for ($i = 0; $i < $tam; $i++) {
        $nuevo[] = rand($min, $max);
    }

    return $nuevo;
}


$nuevoArray = arrayAleatorio(6, 2, 70);

var_dump($nuevoArray);

echo "<br>";



echo"<br>";

echo"<h3> Una función que reciba un \$array por referencia y devuelva la cantidad 
 de números pares que hay almacenados: arrayPares(array &\$array): int </h3>";

function numPares(array &$array){
    $count=0;
    $tam=count($array);
    for ($i=0; $i < $tam; $i++) { 

        if($array[$i]%2==0){
            $count++;
        }
        
    }
   
    return $count;
}


$array2=[2,3,5,6,7,8,89,8,56,3,23];

print_r(numPares($array2));


echo"SOLUCION JULIO";





echo"<h3>PARÁMETROS POR DEFECTO / OPCIONALES

Permiten asignar valores en la declaración, y posteriormente, dejar el argumento en blanco.</h3>";


function obtenerNombre($nombre = "Julio") {
    echo "mi nombre es $nombre";
}
echo"<h2>obtenerNombre();</h2>";
obtenerNombre();
echo"<h2> obtenerNombre(Pepe)</h2>";
echo "<br/>";

obtenerNombre("Pepe");





echo"<h3> Crea las siguientes funciones:
 Una función que devuelva el mayor de todos los números recibidos como 
 parámetros: function mayor(): int. Utiliza las funciones func_get_args(),
 etc... No puedes usar la función max().</h3>";
echo"func_num_args() recoge todos los elementos que pasas a la funcion en un array";
echo"<br>";
echo"func_num_args() obtiene la cantidad de parametros recibidos";


 function mayor(){

     $args=func_get_args();
     $mayor=0;
 
 
    if(func_num_args() == 0){
        return false;

    }else{

          foreach ($args as $num) {
             if($num>$mayor){
                $mayor=$num;
            }  
          }
    }
     return $mayor;
 }

$res=mayor(1,22,32,4,34,6,7);

echo"<br><br><br>";


print($res);




echo"<h3>Una función que concatene todos los parámetros recibidos separándolos con un espacio:
 function concatenar(...\$palabras) : string. Utiliza el operador ....</h3>";

 function concatenar(... $palabras){
    $cadena="";
    if($palabras==0){
        return false;
    }else{
        foreach ($palabras as $palabra) {
            $cadena.=$palabra." ";
        }
    }
    return $cadena;
 }
print(concatenar(34,67,56,34,34,67,8));



echo"<h3>Añade las siguientes funciones:</br>";

   echo"<h3> digitos(int \$num): int → devuelve la cantidad de dígitos de un número.</br>";

   function digitos(int $n){

   $stng=(string)$n;

   $tam=strlen($stng);

    return $tam;

   }

    print(digitos(12359,67));

    echo"<br><br>";

   echo"  digitoN(int \$num, int \$pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición \$pos.";
    
   echo"<br>";
   
   function digitoN($num , $cant){
    $res=(string)$num;
    return $n=$res[$cant-1];
   }
   print(digitoN(1234,3));

echo"<br><br>";
   echo"  quitaPorDetras(int \$num, int \$cant): int → le quita por detrás (derecha) \$cant dígitos.";

   function quitaPorDetras(int $num, int $cant){

   
    $str=(string)$num;
    $tam=strlen($str);
    $salida=0;
    $digitosRest=$tam-$cant;


    for ($i=0; $i <$digitosRest; $i++) { 

      $salida.=$str[$i];  

    }
 

     return $salida;
   }
    echo"<br>";
   print(quitaPorDetras(123433304,2));
     echo" Llamada por nombre ";  quitaPorDetras(num: 1234, cant: 2);

   echo"<br> <br>";


   echo"quitaPorDelante(int \$num, int \$cant): int → le quita por delante (izquierda) \$cant dígitos.";
     echo"<br> <br>";
   
   function quitaPorDelante(int $num, int $cant){

    $s=(string)$num;
  

    $res=substr($s,$cant);

    return $res;
    
   } 


   echo"Llamada por posición  => "; echo quitaPorDelante(1234,1);

   echo" Llamada por nombre => ";  echo quitaPorDelante(num: 1234, cant: 1);

  echo"<br> <br>";

   echo" Para probar las funciones, haz uso tanto de paso de argumentos posicionales como argumentos con nombre.";
   echo"<br> <br>";


