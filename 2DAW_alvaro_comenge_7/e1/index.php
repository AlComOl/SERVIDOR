
<?php
// no se muy bien si lo que pides es eso 
$entrada = fopen("datos.ex", "r");
$salida = fopen("emails.jul", "w");

while(!feof($entrada)){
    $linea = trim(fgets($entrada));
    if($linea != ""){
        $partes = explode(" ", $linea);
        $inicial = strtolower(substr($partes[0], 0, 1));
        $apellidos = strtolower(implode("", array_slice($partes, 1)));
        $email = $inicial . "." . $apellidos . "@iesfuentesanluis.org";
        fwrite($salida, $email . "\n");
    }
}

fclose($entrada);
fclose($salida);

echo "Archivo emails.jul";

?>



