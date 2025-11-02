<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server</title>
</head>
<body>
  
</body>
</html>


<?php

if(isset($_POST["boton"])){

$_POST["boton"];
$dir_subida =  __DIR__ . '/subida/';//se pone esto porque el directorio esta dentro de docker trabajando con windows
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

//basename: muestra el nombre del fichero con la extensión

echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
    // Redirigir a la página anterior (por ejemplo index.php)

    

} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
// print_r($_FILES);

print "</pre>";
}else if(isset($_POST["borrar"])){

$posicion=$_POST["borrar"];
//se utiliza para escanear el contenido de un directorio.
//array_slice comienza desde el tercer elemento (índice 2) del array devuelto por scandir.
$resultado= array_slice(scandir("./subida"),2);//quita los directorios ocultos ., ..
$ruta = "./subida/".$resultado[$posicion];//resultado(nuevo array) posicion el elemento a borrar

unlink($ruta); //borramos

}

?>
<form class="form-check" action="./index.php" method="post">
  <button type="submit" class="btn btn-outline-primary">VOLVER</button>
</form>


<form enctype="multipart/form-data" action="" method="POST">
<!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
<!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
<!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
Enviar este fichero: <input name="fichero_usuario" type="file" />
<input type="submit" name="boton" value="Enviar fichero" />
</form>

<?php
$resultado= array_slice(scandir("./subida"),2);

foreach($resultado as $key => $value){
echo"<br>";
echo"<img src='./subida/$key' width='40px',heigth='30px'>";
echo"<form action=''method='POST'><button type='submit' name='borrar' value='$key'>eliminar</button></form> <br>";
}

?>