<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
table{
    border:1px black solid;
    width:270px;
}
tr,td{
border:1px black solid;
width: 30px;
height: 30px;
text-align: center;
}
td{

}
</style>
<body>
    
</body>
</html>

<?php

$productos = array(
    array("nombre" => "Teclado", "categoria" => "Electrónica", "precio" => 120),
    array("nombre" => "Monitor", "categoria" => "Electrónica", "precio" => 250),
    array("nombre" => "Ratón", "categoria" => "Electrónica", "precio" => 40),
    array("nombre" => "Impresora", "categoria" => "Oficina", "precio" => 180),
    array("nombre" => "Silla de oficina", "categoria" => "Mobiliario", "precio" => 95)
);

echo"<table>";
echo"<th>Nombre</th>";
echo"<th>Categoria</th>";
echo"<th>Precio</th>";
foreach($productos as $key => $value){
    echo"<tr>";
    echo"<td>$value[nombre]</td><td>$value[categoria]</td>";

    if($value['precio']>=50){
       
        echo"<td><strong>$value[precio]</strong></td>";
    }else{
         echo"<td>$value[precio]</td>";
    }
    
   
}
echo"</tr>";
echo"</table>";
?>