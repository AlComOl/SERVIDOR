<!-- =TABLA MULTIPLICAR=
Crea un programa que muestre por pantalla un cuadrado exactamente igual (fíjate bien en los encabezados, tanto de las filas como de las columnas) al de la imagen con las tablas de multiplicar. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla Multiplicar</title>
</head>
<body>
    <table>
        <?php
        ?>
        <tr>
        <?php
        for ($i=1; $i <11 ; $i++) { 
            
          
            for ($z=1; $z <11 ; $z++) {
                if($z==1&&$i!=1){
                    ?>
                    <td style="padding:30px;background:red">
                    <?php
                }else{
                    if($z!=1&&$i==1|| $i==1&&$z==1){
                    ?>
                    <td style="padding:30px;background:blue">
                    <?php
                    }  else{
                        ?>
                        <td style="padding:30px;background:white">
                        <?php
                    }  
                }
                echo ($i*$z);
                ?>
                </td>
                <?
            }
            ?>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>