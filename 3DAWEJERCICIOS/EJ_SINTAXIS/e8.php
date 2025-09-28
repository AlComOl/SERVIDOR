<!-- Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. 
 Para ello, crea un array de personas, siendo cada persona un array asociativo:
  [ ['nombre'=>'Bruce', 'apellido'=>'Wane', 'ciudad'=>'Gotham'],[…],… ]. 
  Posteriormente, recorre el array y muéstralo en una tabla HTML,
   también sería interesante mostrar en cada array persona cuántos campos existen. -->



<?php

$myarray=[ ['nombre'=>'Bruce', 'apellido'=>'Wane', 'ciudad'=>'Gotham'],
            ['nombre'=>'Alvaro', 'apellido'=>'Comenge', 'ciudad'=>'Los Angeles'],
            ['nombre'=>'Juan', 'apellido'=>'Fernandez', 'ciudad'=>'Sevilla'],
            ['nombre'=>'Andres', 'apellido'=>'Sevilla', 'ciudad'=>'Magaluf'],
            ['nombre'=>'Laya', 'apellido'=>'Servido', 'ciudad'=>'Jaen']
        ];

        foreach ($myarray as $key => $value) {

            echo"<table>";
            echo"<tr>";
            echo"[$value]";
        }