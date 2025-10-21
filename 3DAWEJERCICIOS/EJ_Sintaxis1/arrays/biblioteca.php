<?php

$bibliotecas = array(
    array(
        "nombre" => "Biblioteca Central",
        "estanterias" => array(
            array(
                "codigo" => "A1",
                "libros" => array(
                    array("titulo" => "1984", "autores" => array("George Orwell")), 
                    array("titulo" => "Fahrenheit 451", "autores" => array("Ray Bradbury"))
                )
            ),
            array(
                "codigo" => "A2",
                "libros" => array(
                    array("titulo" => "El Quijote", "autores" => array("Miguel de Cervantes")),
                    array("titulo" => "Cien Años de Soledad", "autores" => array("Gabriel García Márquez"))
                )
            )
        )
    ),
    array(
        "nombre" => "Biblioteca del Campus",
        "estanterias" => array(
            array(
                "codigo" => "B1",
                "libros" => array(
                    array("titulo" => "Clean Code", "autores" => array("Robert C. Martin")),
                    array("titulo" => "The Pragmatic Programmer", "autores" => array("Andrew Hunt", "David Thomas"))
                )
            ),
            array(
                "codigo" => "B2",
                "libros" => array(
                    array("titulo" => "Introduction to Algorithms", "autores" => array("Cormen", "Leiserson", "Rivest", "Stein"))
                )
            )
        )
    ),
    array(
        "nombre" => "Biblioteca Infantil",
        "estanterias" => array(
            array(
                "codigo" => "C1",
                "libros" => array(
                    array("titulo" => "Harry Potter", "autores" => array("J.K. Rowling")),
                    array("titulo" => "Matilda", "autores" => array("Roald Dahl"))
                )
            )
        )
    )
);


foreach ($bibliotecas as $nombre) {

    echo"$nombre[nombre]<br>";

    foreach($nombre["estanterias"] as $estanterias){

        echo"$estanterias[codigo]<br>";

         foreach($estanterias["libros"] as $libros ){

            echo" * $libros[titulo]<br>";

            // foreach($libros["autores"] as $autor){
            //     $autor["autores"];

            // }

         }


     

         
        }

    }

