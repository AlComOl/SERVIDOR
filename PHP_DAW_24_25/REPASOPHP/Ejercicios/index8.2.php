<?php
$persona1=["nombre"=>"Álvaro","Apellido"=>"Comenge","email"=>"alvaro@gmail.com"];
$persona2=["nombre"=>"José","Apellido"=>"Gómez","email"=>"jose@gmail.com","otro"=>"Gómez"];
$persona3=["nombre"=>"Luis","Apellido"=>"Gómez","email"=>"luis@gmail.com"];
$persona4=["nombre"=>"Andrés","Apellido"=>"Gómez","email"=>"andres@gmail.com"];
$persona5=["nombre"=>"Pepe","Apellido"=>"Gómez","email"=>"pepe@gmail.com"];

$fichero=[$persona1,$persona2,$persona3,$persona4,$persona5];

echo '<table style="border: 1px solid black; padding: 20px;">';
echo '<th style="border: 1px solid black; padding: 20px;"> Nombre </th>';
echo '<th style="border: 1px solid black; padding: 20px;"> Apellido </th>';
echo '<th style="border: 1px solid black; padding: 20px;"> email </th>';

foreach($fichero as $clave => $persona){

   echo "<tr>";
   echo'<td style="border: 1px solid black; padding: 20px;">';
   echo "{$persona["nombre"]}";
   echo'</td>';
   echo'<td style="border: 1px solid black; padding: 20px;">';
   echo"{$persona["Apellido"]}";
   echo'</td>';
   echo'<td style="border: 1px solid black; padding: 20px;">';
   echo"{$persona["email"]}";
   echo'</td>';

   if($persona["otro"]){
      echo'<td style="border: 1px solid black; padding: 20px;">';
   echo"{$persona["otro"]}";
   echo'</td>';
   }

  


   
   echo "</tr>";


}

echo'</table>';
?>