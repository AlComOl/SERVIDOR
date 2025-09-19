<?php
//  $fitxer=fopen("notasalumnos.csv", "r");
//  while(!feof($fitxer)){
//     $line = fgets($fitxer);
//      echo $line.'<br>';
    
//  }
//  fclose($fitxer);


 $fichero= fopen("notasalumnos.csv","r"); 


 
 if ($fichero !== false) {
   // Mientras no se llegue al final del archivo
   while (!feof($fichero)) {//
       // Leer una línea del archivo
       $linea = fgets($fichero);

       // Dividir la línea en un array separando por comas
       $datos = explode(",", $linea);

      // Procesar los campos de la línea
      //  echo "<p> DNI: " . $datos[0] . " | Departamento: " . $datos[1] ." | Nota: " . $datos[2] . "</p>";

     $array["dni"] =$datos[0];

     $array["nota"] =$datos[1];

   }


   foreach ($array as $key => $value) {
      echo"". $key ."=>". $value ."";
   // Cerrar el archivo después de procesarlo
   fclose($fichero);

   }


} else {
   echo "No se pudo abrir el archivo.";
}


?>