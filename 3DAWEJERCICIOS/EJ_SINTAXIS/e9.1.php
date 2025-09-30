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

// foreach ($paises as $pais) {
        
  

//     foreach ($pais as $key =>$value) {
        
//        if (is_array($value)) {                 //¿es otra caja?
//             echo "$key:<br>";
//             foreach ($value as $item) {         // Nivel 3
//                 echo " - $item<br>";
//             }
//         } else {
//             echo "$key => $value<br>";          // Valor simple
//         }
//     }
//     echo "<hr>";
// }


$universidades = [
    "Universidad de Madrid" => [
        "fundada" => 1850,
        "rector" => "Dr. García",
        "facultades" => [
            "Ciencias" => ["Matemáticas", "Física", "Química"],
            "Letras" => ["Historia", "Filosofía"],
            "Ingeniería" => ["Informática", "Civil", "Industrial"]
        ]
    ],
    "Universidad de Barcelona" => [
        "fundada" => 1902,
        "rector" => "Dra. López",
        "facultades" => [
            "Derecho" => ["Civil", "Penal"],
            "Medicina" => ["Anatomía", "Enfermería"]
        ]
    ],
    "Universidad de Tokio" => [
        "fundada" => 1877,
        "rector" => "Dr. Tanaka",
        "facultades" => [
            "Tecnología" => ["Robótica", "Nanotecnología"],
            "Artes" => ["Música", "Pintura"]
        ]
    ]
];

foreach ($universidades as $key => $value) {

    echo"<h1> $key </h1> <br>";

    foreach ($value as $key1 => $item) {

        echo"$key1 => $item <br> ";

            if(is_array($item)){

                foreach ($item as $key2 => $item2) {

                    echo"$key2 [";

                    if(is_array($item2)){

                        foreach ($item2 as  $modulo) {

                            echo"$modulo ";
                        }
                        echo"] <br>";
                    }else{
                        echo"$item2 => $modulo";
                    }

                }

            }



        }
        
    }
  


 


    


