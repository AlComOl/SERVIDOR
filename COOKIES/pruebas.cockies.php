<?php

setcookie("valor", 4, time() + 10);    
//time() tiempo desde que se originó unix+ 30 segundos

print_r($_COOKIE);    //no muestra todas las cookies por temas de seguridad

echo "<br>";

