<!-- Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo ["M", "M", "F", "M", ...]).
Una vez completado, vuelve a recorrerlo y calcula cuántos elementos hay de cada uno de los valores almacenando el
resultado en un array asociativo ['M' => 44, 'F' => 66] (no utilices variables para contar las M o las F).
Finalmente, muestra el resultado por pantalla.
Interesant(e usar array_count_values. -->
<?php
  $sexo=[];
//   $contM=0;
//   $contF=0;
$a=0;
while ($a <= 50) {
    $a++;
    $elemento=rand(1,2);

    $valor=($elemento==1?"M":"F");
    
    array_push($sexo,$valor);

}

print_r(array_count_values($sexo));

// foreach ($sexo as $key => $value) {


//     $value=="M" ? $contM++ :$contF++;
    
//     echo"$key  =>  $value";
//     echo "<br>";
// }

// echo"M => $contM            ";

// echo"F => $contF";


?>