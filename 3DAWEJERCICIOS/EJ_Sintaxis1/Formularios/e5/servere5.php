<?php
if(isset($_POST["Enviar"])){
    $dir_subida = './subir/';
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);


    //basename: muestra el nombre del fichero con la extensión

    echo '<pre>';

    

        if(move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }

        // echo 'Más información de depuración:';
        // print_r($_FILES);

    
    
}else if(isset($_POST["eliminar"])){

    $posicion=$_POST["eliminar"];

    $archivo=array_slice(scandir("./subir"),2);//el scandir lo recorre y mete dentro del array nuevo
    $ruta="./subir/$archivo[$posicion]";

    unlink($ruta);

    print "</pre>";


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
    <form enctype="multipart/form-data" action="./servere5.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este fichero: <input name="fichero_usuario" type="file" />
    <input type="submit" name="Enviar" value="Enviar fichero" />
</form>
    
</body>
</html>

<?php

$archivo=array_slice(scandir("./subir"),2);

 foreach ($archivo as $key => $value) {
  echo"<form method='POST'><img src='./$value'>$key  <button type='submit' name='eliminar' id=''value='$key'>Eliminar</button></form>";
}
