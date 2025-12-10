<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table "Style=border">
    <?php


$tabla = [  array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9),
            array(1,2,3,4,5,6,7,8,9)
        ];

        foreach ($tabla as $fila => $subarray) {
            
          ?> <tr><?php
            foreach ($subarray as $columna => $valor) {
                echo ("$fila....$valor".".......".($fila+$valor)%2)."********";
                 if((($fila+$valor)%2)==0){
                    ?> <td style="padding:30px;background-color:white;"></td><?php
                 }else{
                     ?> <td style="padding:30px;background-color:black;"></td><?php
                 }
               
              
            }
            ?></tr><?php
            }
?>
    </table>
</body>
</html>

