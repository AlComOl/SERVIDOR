<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
    <script src="index.php"></script>

</head>
<body>

    
    <table>
        <?php
        
        $filas=8;
        $columnas=8;
        $color=true;
        
        for($i=0;$i<=$filas;$i++){
         print "<tr>";
            for($j=0;$j<=$columnas;$j++){
               if(($i+$j)%2==0){
                  print '<td class="rojo"></td>';
               }else{
                  print '<td class="blanco"></td>';
               }
               
            }
            print "</tr>";
        
        }
        
        
        
        ?>
        </table>


    
</body>
</html>