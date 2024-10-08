<!-- La idea es simular una web que si es la primera vez que la visitas muestre un mensaje de "Bienvenida" en un cuadrado en azul,
  si ya la has visitado debe mostrar  otro mensaje "ya estas de vuelta" de color Azul. La cookie deberá durar unos 10 segundos. -->



<?php

if(isset($_COOKIE['valor'])){

    echo "<h1 style='height: 200px; width: 100px; background-color: blue;'>Welcome to my paradise </div>";

}else{
    setcookie("valor", 1, time() + 30);  

    print_r($_COOKIE);
}



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



