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
        echo"<table style='border:1px black solid' >";
       
        foreach ($myarray as $persona) {
       
          echo"<tr style='border:2px solid black'>";
          
            foreach ($persona as $key => $value) {
                 $tam=count($persona);
                    
                echo"<td style='border:2px solid black'>";
                       echo"$value"; 
                        
                 echo"</td>";        
                  
            }
            echo"<td>";
              echo"$tam"; 
            echo"</td>";
          echo"</tr>";
          
        } 
         
         echo"</table>";
