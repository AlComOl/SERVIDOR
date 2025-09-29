<?php


$paises = [
    "España" => [
        "capital" => "Madrid",
        "moneda" => "Euro",
        "ciudades" => ["Barcelona", "Sevilla", "Valencia"]
    ],
    "Francia" => [
        "capital" => "París",
        "moneda" => "Euro",
        "ciudades" => ["Lyon", "Marsella"]
    ],
    "Japón" => [
        "capital" => "Tokio",
        "moneda" => "Yen",
        "ciudades" => ["Osaka", "Kioto", "Nagoya"]
    ]
];

foreach ($paises as $pais) {
        
  

    foreach ($pais as $key =>$value) {
        
       if (is_array($value)) {                 // ❗¿es otra caja?
            echo "$key:<br>";
            foreach ($value as $item) {         // Nivel 3
                echo " - $item<br>";
            }
        } else {
            echo "$key => $value<br>";          // Valor simple
        }
    }
    echo "<hr>";
}