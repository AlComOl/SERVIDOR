<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   //genera array
    for ($i=0; $i <49 ; $i++) { 
        $aleatorio[]=rand(1,9);
    }
    //ordena el array ascendente
    echo "*********************************ASCENDENTE**********************************************<br>";
    for ($a=0; $a <49 ; $a++) { 
        sort($aleatorio);

    }
    //muestra array
    for ($z=0; $z <49 ; $z++) { 
        echo"$aleatorio[$z] , ";
    }

    echo "*********************************DESCENDENTE**********************************************<br>";
       //genera array
       for ($t=0; $t <49 ; $t++) { 
        $aleatorio1[]=rand(1,9);
    }
        //ordena el array descendente
        for ($b=0; $b <49 ; $b++) { 
            rsort($aleatorio1);
    
        }
        //muestra array
        for ($x=0; $x <49 ; $x++) { 
            echo"$aleatorio1[$x]  ";
        }
        echo "<br>*********************************Numero minimo del primer array**********************************************<br>";
    //genera array
    for ($i=0; $i <50 ; $i++) { 
        $aleatorio3[]=rand(1,100);
    }

      //muestra array
      for ($x=0; $x <50 ; $x++) { 
        echo"$aleatorio3[$x]  ";
    }
     

       echo min($aleatorio3);
       echo "<br>*********************************Numero maximo del primer array**********************************************<br>";

       echo max($aleatorio3);
       echo "<br>*********************************Hace la media del primer array**********************************************<br>";

    //muestra la media del array

    echo array_sum($aleatorio3)/count($aleatorio3);
      

   ?> 
</body>
</html>