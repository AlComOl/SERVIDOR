<?php

$cartas="./cartas";
$cantidad=0;

$baraja=array_slice(scandir($cartas),2);


if(isset($_POST['cantidad'])){

    $cantidad=(int)$_POST['cantidad'];

  if($cantidad<=0){
        echo "INTRODUCE LA CANTIDAD CORRECTA";
    }



      $catasAleatorias=array_rand($baraja,$cantidad);

}


print_r($baraja);





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
</head>
<style>
    img{
        width: 70px;
        height: 100px;
    }
</style>
<body>
    <form method="post">
        <input type="number" name="cantidad">
        <button type="submit">Enviar Consulta</button>
        <button type="borrar">Borrar</button>
    </form>
    <?php
     foreach($baraja as $key => $value){

        if(empty($catasAleatorias)){
            echo" Introuce otra cantidad";
        }

        if(in_array($key,$catasAleatorias)){
            echo"<img src='./cartas/$value'>";

            $nuevasCartas[]=$value;

        }
    }

//no esta terminado

   
    ?>
    
</body>
</html>