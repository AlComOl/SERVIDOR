<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,tr,td{
        border:1px solid black;
    }
</style>
<body>
    
</body>
</html>
<table>
<?php
$rgb="";
$hexa=0;
$r=$g=$b=0;
$bandera=0;


// while($bandera!==5){
//     $bandera++;

    $i=$b;
    for($i=0;$i<250;$i+=50){
      
      if($g<250){
                  $g=0;
                  $rgb.=$g.",";
                   
      }else{
                  $g+=50;
                  $rgb.=$g.","; 
           }

        for ($x=0; $x<250; $x++) { 
                if($b<250){
                  $g=0;
                  $rgb.=$g.",";
                   
                }else{
                  $g+=50;
                  $rgb.=$g.","; 
                }
            $rgb.=$g.",";
           
            for ($y=0; $y < 1; $y++) { 
                if($b<250){
                  $rgb.=$b.",";
                  $b+=50; 
                    }
            
                
            }
             echo"$rgb  <br>"; 
              
        }

       
      
       
    }


// }

 
    
    // for ($i=0; $i < 36; $i++) { 
    //     echo"<tr>";
    //     for ($z=0; $z < 6; $z++) { 
        
    //         $rgb+=50;
    //     echo'<td>'.$hexa=dechex($rgb).'</td>';
    //     }
    //     echo"</tr>";
    // }

?>
</table>