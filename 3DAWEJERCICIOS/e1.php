<?php

$Nombre="Alvaro";
$Apellido="Comenge";
$Correo="alvarocomenge@gmail.com";
$telefono="56465656";
$ciudad="Valencia";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>

<style>
        table{
            border: 2px black solid;   
        }   
        td{
            border: 2px black solid; 
        }
</style>
<body>
    <table>
        <tr>
            <td >Nombre:</td>
            <td><?php echo $Nombre ?></td>
        </tr>
        <tr>
           <td>Apellidos</td>
           <td><?php echo $Apellido ?></td>
        </tr>
        <tr>
             <td>Correo</td>
             <td><?php echo $Correo ?></td>
        </tr>
        <tr>
            <td>telefono</td>
            <td><?php echo $telefono ?></td>
        </tr>
        <tr>
            <td>Ciudad</td>
            <td><?php echo $ciudad ?></td>
        </tr>
    </table>
    
</body>
</html>