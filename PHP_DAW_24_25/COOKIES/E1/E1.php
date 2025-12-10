<?php
if (isset($_COOKIE['valor'])) {
   
    echo "<h1 style='color: blue; text-align: center;'>Ya estás de vuelta</h1>";
} else {
    // La cookie no existe, así que mostramos el mensaje de bienvenida y la creamos
    setcookie('valor', 1, time() + 10);  // Duración de 10 segundos para la cookie
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1 style='height: 200px; width: 200px; background-color: blue; color: white; text-align: center;'>Bienvenido</h1>
    </div>
</body>
</html>
<?php
}
?>



