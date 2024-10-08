<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border= '1'>

<?php
    $filas=9;
    $columnas=9;
    

    for($i=1;$i<=$filas;$i++){
        print "<tr>";
        for($j=1;$j<=$columnas;$j++){
           
            if($j==1){
                print "<td style='background-color:blue; padding:20px; text-align:center;'>$i</td>";


            }else if($i==1){
                print "<td style='background-color:red; padding:20px; text-align:center;'>$j</td>";


            }else if($i||$j !=0){
                print "<td style=' text-align:center;'>".($i*$j)."</td>";
            }
           
    }
   
    }
    print "</tr>";


/*$filas=8;
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
            print "</tr>";*/
?>
</table>
</body>
</html>