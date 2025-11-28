<?php

$nombre=$_POST["Nombre"];
$apellido=$_POST["Apellido"];
$contraseña=$_POST["Contraseña"];
$puesto=$_POST["puesto"];
$deporte=$_POST["deporte"];
$genero=$_POST["genero"];
$edad=$_POST["edad"];
$descripcion=$_POST["descripcion"];


echo"<div style='background: linear-gradient(to right, #fff9c4, #fff176, #ffd54f)';>El nombre del que envio el formulario es $nombre ,  $apellido  y la contraseña: $contraseña</div> <br>";

foreach ($_POST["puesto"] as $key => $value) {
   $Apuesto =$value;
}

echo"<div style='background: linear-gradient(to right, #a8e6cf, #81c784, #4caf50);'>El puesto en el Instituto es $Apuesto</div> <br>";


// foreach($_POST["deporte"] as $key => $value){
   // $deporteFavorito.=",".$value; esto no es correcto la manera correcta es con inplode();
   $deporteFavorito=implode(",",$deporte);
// }

echo"<div style='background: linear-gradient(to right, #ffcdd2, #e57373, #f44336);'>El deporte favorito es $deporteFavorito </div> <br>";


foreach ($genero as $key => $value) {
   $genero=$value;
}

echo"<div style='background: linear-gradient(to right, #f8bbd0, #f48fb1, #ec407a);'>El genero es $genero</div> <br>";


foreach ($edad as $key => $value) {
   $edad=$value;
}

echo "<div style='background: linear-gradient(to right, #bbdefb, #64b5f6, #2196f3);'>La edad es $edad</div> <br>";


foreach ($descripcion as $key => $value) {
   $descripcion=$value;
}

echo"<div style='background: linear-gradient(to right, #d7ccc8, #a1887f, #6d4c41);' >Descripción;</div> $descripcion";









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