<!-- =EJERCICIO MOSTRAR DATOS TABLA=

Escribe un programa que almaene en variables tu nombre,
 primer apellido, segundo apellido, email, año de nacimiento y teléfono.
  Luego muéstralos por pantalla dentro de una tabla. -->



<!DOCTYPE html>
<html lang="es">
<?php

$nombre = "Alvaro";
$primer_apellido = "Comenge";
$segundo_apellido = "";
$email = "  ";
$año_nacimiento = 0;
$telefono = 0;
?>
<table border="1" style="border-collapse: collapse; width: 50%; margin: auto;">
    <tr>
        <th colspan="2" style="text-align: center;">Datos Personales</th>
    </tr>
 <tr>
    <td>Nombre</td>
    <td><?php echo $nombre ?></td>
</tr>
<tr>
    <td>primer_apellido</td>
    <td><?php echo $primer_apellido ?></td>
</tr>
</tr>
<tr>
    <td>segundo_apellido</td>
    <td><?php echo $segundo_apellido ?></td>
</tr>
<tr>
    <td>mail</td>
    <td><?php echo $email ?></td>
</tr>
<tr>
    <td>año_nacimiento</td>
    <td><?php echo $año_nacimiento ?></td>
</tr>
<tr>
    <td>telefono</td>
    <td><?php echo $telefono ?></td>    
 </tr>
 </table>
        <!-- <td>Nombre</td>
        <td>Primer Apellido</td>
        <td>Segundo Apellido</td>
        <td>Email</td>
        <td>Año de Nacimiento</td>
        <td>Teléfono</td> -->
    

 </table>
    
</html>