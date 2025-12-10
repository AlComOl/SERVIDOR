<!-- La idea es que se visualicen las diferentes tonalidad de los distintos colores, es decir, todas las combinaciones 
 de colores posibles con un incremento de 50 en cada tonalidad de la paleta , para ello, deberemos ir dando valores
 a RGB de 0 hasta 255 (incremento 50).

Para visualizar el valor en hexadecimal se usará la función dechex -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <table>
    <?php
    $incremento=50;
   

    for($r=0;$r<255 ;$r+=$incremento){
        
        for($g=0;$g<255 ;$g+=$incremento){
           
            for($b=0;$b<255 ;$b+=$incremento){
              
                echo"<tr style='background-color:rgb($r,$g,$b)';>";
                echo"<td>R: $r</td>";
                echo"<td>G: $g</td>";
                echo"<td>B: $b</td>";
                echo"<td>R: $r</td>";
                echo"<td>G: $g</td>";
                echo"<td>B: $b</td>";
                echo "</tr>";
            }
        }

    }

        // for ($i=0; $i <= 36 ; $i++) {
        //     echo '<tr colspan="2";>'; 
        //     for ($j=0; $j <6 ; $j++) { 
        //         echo "<td>$i</td>";
        //     }
        //    echo "</tr>";
        
        // }
    ?>
    </table>
</body>
</html>