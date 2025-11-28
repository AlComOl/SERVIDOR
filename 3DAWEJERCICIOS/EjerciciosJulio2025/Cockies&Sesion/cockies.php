<?php

setcookie("Alvaro", 1, time() + 10);    
//time() tiempo desde que se originó unix+ 30 segundos

print_r($_COOKIE);    //no muestra todas las cookies por temas de seguridad

echo "<br>";

//Muestra las cookies
echo $_COOKIE['Alvaro'];

//Actualizar
// setcookie('valor', 0);
// echo $_COOKIE['valor'];


