<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST["enviar"])){

$dir_subida='./descargas/';//en este directorio se guarda los archivos subido
$fichero_subido=$dir_subida.basename($_FILES['fichero_usuario']['name']);//basename: muestra el nombre del fichero con la extensión
echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}
  
} else if(isset($_POST["borrar"])){//si clicamos eliminar
    $posicion=$_POST["borrar"];
//se utiliza para escanear el contenido de un directorio.
//array_slice comienza desde el tercer elemento (índice 2) del array devuelto por scandir.
$resultado= array_slice(scandir("./descargas"),2);


$ruta = "./descargas/" . $resultado[$posicion];

unlink($ruta); //borramos

}

?>
<form enctype="multipart/form-data" action="" method="POST">
<!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
<!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
<!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
Enviar este fichero: <input name="fichero_usuario" type="file" />
<input type="submit" name="enviar" value="Enviar fichero" />
</form>


<?php

$resultado = array_slice(scandir("./descargas"), 2);
foreach ($resultado as $key => $value) {
    echo "<img src='./descargas/$value' width='50px' height='60px'>";
    echo " <form action='' method='POST'>";
    echo "<input type='submit' name='borrar' value='$key'>";
    echo " </form>";
        
}

//dentro del unlink hay que poner la ruta 



?>

</body>
</html>