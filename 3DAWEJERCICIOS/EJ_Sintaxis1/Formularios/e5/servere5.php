<?php
$dir_subida = './subir/';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

//basename: muestra el nombre del fichero con la extensión

echo '<pre>';
if(isset($_POST["Enviar"])){
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}
}else{
echo 'Más información de depuración:';
print_r($_FILES);
}
print "</pre>";

$archivo=scandir($dir_subida);//el scandir lo recorre y mete dentro del array nuevo
$newarchivo=array_slice($archivo,2);

 foreach ($newArchivo as $key => $value) {
  echo"<form method='POST'><img src='./$value'>$key  <button type='submit' name='eliminar' id='' value='$value'>Eliminar</button></form>";
}
$ruta="./subida.$newArchivo[$]"
if(isset($_POST["eliminar"])){

unlink("./subida/");

    
}


?>