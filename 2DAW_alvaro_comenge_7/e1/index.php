
<?php
// no se muy bien si lo que pides es eso 
$entrada = fopen("datos.ex", "r");
$salida = fopen("emails.jul", "w");//escritura

while(!feof($entrada)){
    $linea = trim(fgets($entrada));
    if($linea != ""){// solo líneas no vacías
        $partes = explode(" ", $linea);//Separar nombres y apellidos(separa por el espacio)
        $inicial = strtolower(substr($partes[0], 0, 1));//primera letra del primer nombre(0,hasta 1) a minuscula
        $apellidos = strtolower(implode("", array_slice($partes, 1)));//todos los elementos excepto el primero 
        $email = $inicial . "." . $apellidos . "@iesfuentesanluis.org";//junta la inicial y el nombre
        fwrite($salida, $email . "\n");//lo mete y salta la linea
    }
}

fclose($entrada);
fclose($salida);

echo "Archivo emails.jul";

?>



