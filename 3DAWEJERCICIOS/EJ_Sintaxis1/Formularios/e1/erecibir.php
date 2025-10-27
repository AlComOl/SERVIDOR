<?php

$nombre=$_POST["Nombre"];
$apellido=$_POST["Apellido"];
$contraseña=$_POST["Contraseña"];
$puesto=$_POST["puesto"];


echo"<div style='background-color:yellow'>El nombre del que envio el formulario es $nombre ,  $apellido  y la contraseña: $contraseña <br> </div>";

foreach ($_POST["puesto"] as $key => $value) {
   $Apuesto =$value;
}

echo"El puesto en el Instituto es $Apuesto ";



//Haga un documento con estas características que envíe los siguientes datos:
//
//         nombre (text)
//         apellido (text)
//         contraseña (password)
//         si el usuario es alumno o profesor (select)
//         actividades favorita (min 4)  (Checkbox)
//        genero (M o F) (radiobutton)
//        edad (entre 18 y 99)   (number)
//       comentarios  (textarea)
//       input tipo color
//       un campo oculto con el nombre oculto y valor prueba  (hidden)
//
//Además se debe mostrar desde la web que ha enviado la información. HTTP_REFERER

?>