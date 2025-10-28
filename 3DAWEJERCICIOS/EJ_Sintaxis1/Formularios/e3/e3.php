<?php
//Formulario y Vectores*


//Se desea realizar un formulario en el servidor que genere 10 inputs 
//y un botón, a continuación el servidor recogerá todos los datos los 
//mostrará y calculará la suma tota
$numeros=$_POST["numero"];

if(isset($_POST['enviar'])){
    
    for ($i=0; $i < count($numeros); $i++) { 
        $suma+=$numeros[$i];
     echo"$suma";
    }

}
echo"$suma";


for($i=0;$i<8;$i++){
    echo"<form >";
    echo" número[$i] <input name='numero[]'></input><br>";
}
echo"<button type='submit' name='enviar'>Enviar</button><br>";
echo"</form>";
echo $suma;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>