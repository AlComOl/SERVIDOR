<?php

$mundos = array(
    array(
        "nombre" => "Antártida",
        "territorios" => array(
            array("nombre" => "Estación McMurdo", "tipo" => "Base de investigación", "poblacion" => 100),
            array("nombre" => "Estación Amundsen-Scott", "tipo" => "Base de investigación", "poblacion" => 50)
        )
    ),
    array(
        "nombre" => "Europa",
        "territorios" => array(
            array("nombre" => "Francia", "capital" => "París", "moneda" => "Euro"),
            array("nombre" => "Alemania", "capital" => "Berlín", "moneda" => "Euro"),
            array("nombre" => "Italia", "capital" => "Roma", "moneda" => "Euro")
        )
    ),
    array(
        "nombre" => "América del Sur",
        "territorios" => array(
            array("nombre" => "Argentina", "capital" => "Buenos Aires", "moneda" => "Peso"),
            array("nombre" => "Brasil", "capital" => "Brasilia", "moneda" => "Real")
        )
    ),
    array(
        "nombre" => "Asia",
        "territorios" => array(
            array("nombre" => "India", "capital" => "Nueva Delhi", "poblacion" => "1.4B"),
            array("nombre" => "Tailandia", "capital" => "Bangkok", "poblacion" => "70M")
        )
    )
);



foreach ($mundos as $continente) {

    echo"<h4>$continente[nombre]</h4> <br>";

    foreach ($continente['territorios'] as $territorios) {

           echo"$territorios[nombre]<br>";
        
        
    }

    
}