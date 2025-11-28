<?php
$universidad = array(
    "nombre" => "Universidad Global",
    "ubicacion" => "Madrid",
    "facultades" => array(
        array(
            "nombre" => "Facultad de Ingeniería",
            "departamentos" => array(
                array(
                    "nombre" => "Departamento de Informática",
                    "cursos" => array(
                        array(
                            "codigo" => "INF101",
                            "nombre" => "Programación I",
                            "profesores" => array(
                                array("nombre" => "Ana Pérez", "email" => "ana.perez@uni.es"),
                                array("nombre" => "Luis Gómez", "email" => "luis.gomez@uni.es")
                            )
                        ),
                        array(
                            "codigo" => "INF102",
                            "nombre" => "Estructuras de Datos",
                            "profesores" => array(
                                array("nombre" => "Marta Ruiz", "email" => "marta.ruiz@uni.es")
                            )
                        )
                    )
                ),
                array(
                    "nombre" => "Departamento de Electrónica",
                    "cursos" => array(
                        array(
                            "codigo" => "ELE201",
                            "nombre" => "Circuitos Eléctricos",
                            "profesores" => array(
                                array("nombre" => "Carlos Díaz", "email" => "carlos.diaz@uni.es")
                            )
                        )
                    )
                )
            )
        ),
        array(
            "nombre" => "Facultad de Ciencias Sociales",
            "departamentos" => array(
                array(
                    "nombre" => "Departamento de Psicología",
                    "cursos" => array(
                        array(
                            "codigo" => "PSI101",
                            "nombre" => "Psicología General",
                            "profesores" => array(
                                array("nombre" => "Lucía Fernández", "email" => "lucia.fernandez@uni.es")
                            )
                        )
                    )
                )
            )
        )
    )
);

?>