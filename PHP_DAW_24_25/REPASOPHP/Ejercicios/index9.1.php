<?php
// Crea un programa que muestre por pantalla un cuadrado exactamente igual
// (fíjate bien en los encabezados, tanto de las filas como de las columnas)
// al de la imagen con las tablas de multiplicar.
echo"<table border=1>";
for ($i=1; $i < 9 ; $i++) { 
    echo"<tr style='border:1px solid black';>";
    for($z=1;$z < 9 ; $z++){
        if($i==1){
        echo"<td style='border:1px solid black;padding:30px;background-color:blue'>".($i*$z)."</td>";
        }elseif($z==1){
         echo"<td style='border:1px solid black;padding:30px;background-color:red'>".($i*$z)."</td>";
        }else{
         echo"<td style='border:1px solid black;padding:30px;background-color:white'>".($i*$z)."</td>";

        }
    }
    echo"</tr>";
}
echo"</table>";
?>