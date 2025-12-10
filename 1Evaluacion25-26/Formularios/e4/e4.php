<?php
// SUBIDA FICHEROS**


// parte 1:

// Se desea hacer una pequeña aplicación que muestre las imágenes que sube un usuario con un tamaño de 100px.

// NOTA: crear una carpeta llamada "subida" donde se guardarán las imágenes y darle permisos de escritura. 
//  Recomendable usar isset

// investigar qué hace función scandir

// parte2: **

// Sería interesante que nos diera opción de poder eliminar las imágenes que hemos subido a nuestro servidor.
//  Crearemos unos botones que cada uno de ellos eliminará la imagen que tiene a su lado.  Interesante mirar qué hace unlink


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form enctype="multipart/form-data" action="./server4.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este fichero: <input name="fichero_usuario" type="file" />
    <input type="submit" value="Enviar fichero" />

    <button name="submit" name="enviar">Examinar....</button>

    
</body>
</html>