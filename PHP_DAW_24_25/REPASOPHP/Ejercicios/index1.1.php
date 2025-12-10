<?php
$tabla=[1=>[1,2,3,4,5,6,7,8,9],
        2=>[1,2,3,4,5,6,7,8,9],
        3=>[1,2,3,4,5,6,7,8,9],
        4=>[1,2,3,4,5,6,7,8,9],
        5=>[1,2,3,4,5,6,7,8,9],
        6=>[1,2,3,4,5,6,7,8,9],
        7=>[1,2,3,4,5,6,7,8,9],
        8=>[1,2,3,4,5,6,7,8,9],
        9=>[1,2,3,4,5,6,7,8,9],
    ];

echo"<table style='border:1px'>";
foreach ($tabla as $fila => $valor) {
 echo"<tr>";
  foreach ($valor as $key => $value) {
        echo"$fila...$value //////  ";
    if((($fila+$value)%2==0)){
         echo'<td style="background-color:black; padding:30px"></td>';
    }else{
         echo'<td style="background-color:white; padding:30px"></td>';
    }
   
  }
  echo"</tr>";
} 
echo"</table>";
?>