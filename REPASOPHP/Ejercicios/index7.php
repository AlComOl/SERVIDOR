
<?php
// for ($i=0; $i <100 ; $i++) {
//     $aleatorio=['M','F']; 
//     $aleatorio1=array_push($aleatorio[rand(0,1)]);
// }
// print_r($aleatorio1);
$aleatorio = [];
$aleatorio1 = [];  // Aquí se guardan los resultados

// for ($i = 0; $i < 100; $i++) {
//     $opciones = ['M', 'F'];
//     $aleatorio[] = $opciones [rand(0, 1)];
// }

for ($i = 0; $i < 100; $i++) {
    $opciones1 = ['M', 'F'];
    array_push($aleatorio1,$opciones1[rand(0, 1)]);
}

// print_r($aleatorio);
// echo"<br>********************************************************************************<br>";
print_r($aleatorio1);

echo "<br>********************************************************************************<br>";

array_count_values($aleatorio1);
print_r(array_count_values($aleatorio1));
?>