<?php
//Formulario y Vectores*


//Se desea realizar un formulario en el servidor que genere 10 inputs 
//y un botón, a continuación el servidor recogerá todos los datos los 
//mostrará y calculará la suma tota


if(isset($_POST["enviar"])){
$numeros=$_POST["numeros"];
}
$suma=0;


for($i=0;$i<=9;$i++){
    echo"<form method='post'>";
    echo" número[$i] <input name='numeros[]'></input><br>";
}
echo"<button type='submit' name='enviar'>Enviar</button><br>";
echo"</form>";


if(isset($_POST['enviar'])){

    for ($i=0; $i < count($numeros); $i++) { 
        $suma= $suma+$numeros[$i];
  
    }

}
echo"$suma";
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