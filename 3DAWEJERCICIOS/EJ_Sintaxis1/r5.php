<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
     <form action="r5.php" method="get">
        <h4>Numero de la tabla de multiplicar</h4>
        <input type="text" name="tabla">
        <input type="submit" name="enviar">
      
</body>
</html>


<?php


if(isset($_GET["tabla"])){

        $tabla=$_GET["tabla"];
        $res=0;

            for ($i=0; $i < 10 ; $i++) { 
                $res=$tabla*$i;
                echo"<br> $tabla x $i = $res <br>";
            }
}
?>