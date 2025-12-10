foreach ($comunidadesAutonomas as $comunidadAutonoma) {
    echo "<h2>La comunidad es:".$comunidadAutonoma["comunidad"]."<br>";
 
    foreach ($comunidadAutonoma["provincias"] as  $provincias => $rayos) {
          
        echo " Las provincias son :" . $provincias."<br>";
    
    
    } 
}