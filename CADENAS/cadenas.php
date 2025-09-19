<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre="Alvaro";
    $moneda="Euros";
    $cadena = "Yo soy Batman";
    $ygriega = $cadena[0];

      $cad=strlen($cadena);
      echo "La longitud de $cadena es :". $cad." caracteres.<br>";
//1.strlen: obtiene la longitud de una cadena y devuelve un número entero

//2.substr: devuelve una subcadena de la cadena original

//3.str_replace: reemplaza caracteres en una cadena

//4.strtolower y strtoupper: Transforman una cadena de caracteres en la misma cadena en minúsculas o mayúsculas respectivamente.

      $subcat=substr($cadena,6,11);
      echo "$subcat";
      $replace=str_replace("a","e",$cadena."<br>");

      echo $replace;
    // Si queremos limpiar cadenas, tenemos la función:

    //1.trim: elimina los espacios al principio y al final

    
    $cadena = " Programando en PHP ";
    $limpia = trim($cadena); // "Programando en PHP"

   // La comparación de cadenas puede ser con conversión de tipos mediante == o estricta con ===. También funcionan los operadores < y > si ambas son cadenas. Al comparar cadenas con valores numericos podemos utilizar:

    //1.strcmp: 0 iguales, <0 si "a < b" o >0 si "a > b"
    
   // 2.strcasecmp: las pasa a minúsculas y compara

   
   $frase1 = "Alfa";
   $frase2 = "Alfa";
   $frase3 = "Beta";
   $frase4 = "Alfa5";
   $frase5 = "Alfa6";
   var_dump( $frase1 == $frase2 ); 
   var_dump( $frase1 === $frase2 ); // true
   var_dump( strcmp($frase1, $frase2) ); // 0
   var_dump( $frase2 < $frase3 ); // true
   var_dump( strcmp($frase2, $frase3) ); // -1
   var_dump( strcmp($frase4, $frase5) ); // 1 

   //Si queremos romper las cadenas en trozos, tenemos:

   //1.explode: convierte en array la cadena mediante un separador.
   
   //2.implode / join: pasa un array a cadena con un separador

   
   $frase = "un superpoder, requiere una gran responsabilidad, dijo el tio de Spiderman";
   $partes = explode(",", $frase);

   
   $ciudades = ["Valencia", "Torrent", "Gandía"];
   $cadenaCiudades = implode(">", $ciudades);

    echo "$cadenaCiudades"."<br>";
    

    
    foreach($partes as $parte){
        echo $parte ."<br>";
    }
  /*  Crea un script con PHP que muestre un listado de los nombres de las capitales y sus correspondientes paises.
   El listado debe ser parecido a: La capital de Netherlands és Amsterdam La capital de Greece és Athens La capital
    de Germany és Berlin*/

     $eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

      foreach ($eu as $pais => $capital) {
        echo "La capital de $pais es $capital";
        echo "<br>";
      }

   ?>
    
</body>
</html>