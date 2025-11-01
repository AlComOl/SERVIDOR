<?php

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
print_r($_FILES);

print "</pre>";



?>
<form class="form-check" action="./index.php" method="post">
  <button type="submit" class="btn btn-outline-primary">VOLVER</button>
</form>
