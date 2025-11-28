<?php

if(isset($_POST["enviar"])){

    $n1=$_POST["n1"];
    $n2=$_POST["n2"];


    $resultado=$n1+$n2;

}

//Se desea realizar una calculadora de sólo SUMA, para ello tendremos dos 
// inputs y un botón, cuando se aprete el botón deberá enviar
// el formulario al server haciendo la operación y mostrando el resultado.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.suma{
padding:30px;
}
.resultado{
padding:30px;
}
</style>
<body>


<form action="" method="post">


            <input type="text" name="n1">
            <imput>+</imput>
            <input type="text" name="n2">
        
        <div class="resultado">
                <button type="submit" name="enviar">SUMAR</button>
        </div>


</form>
<h4>Resultado: <?php if(isset($_POST["enviar"]))echo $resultado ?><h4>
</body>
</html>