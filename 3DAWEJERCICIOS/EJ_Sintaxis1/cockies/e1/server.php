<?php
// manejar eliminación enviada por el formulario
if (isset($_POST['eliminar'])) {
    // Para borrar una cookie hay que reescribirla con fecha pasada
    setcookie('Alvaro', '', time() - 3600, '/');
    // opcional: también podrías borrar la cookie visitas si quisieras:
    // setcookie('visitas', '', time() - 3600, '/');
}

// --- CONTADOR con COOKIE (cada navegador tiene su propio contador)
// leer valor actual (si existe), convertir a entero por seguridad
if (isset($_COOKIE['visitas'])) {
    $visitas = intval($_COOKIE['visitas']);
} else {
    $visitas = 0;
}

// incrementar
$visitas++;

// guardar la cookie (duración: 30 días)
// IMPORTANTE: setcookie debe ejecutarse antes de enviar cualquier salida (echo/HTML)
setcookie('visitas', $visitas, time() + 3600*24*30, '/');

// --- COOKIE "Alvaro" para mensaje de bienvenida
if (isset($_COOKIE['Alvaro'])) {
    // existe -> mostrar bienvenida
    $mensaje_alvaro = "<div style='background-color:blue;color:white;padding:6px;'>Bienvenido</div>";
} else {
    // no existe -> crear la cookie y preparar mensaje de primer acceso
    setcookie('Alvaro', 1, time() + 3600*24*30, '/');
    $mensaje_alvaro = "<div style='background-color:yellow;color:black;padding:6px;'>Welcome primer ejercicio de Cookies</div>";
}

// Ahora ya se han enviado (o programado) todas las cookies en cabecera y podemos mostrar HTML
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Contador con Cookies</title>
</head>
<body>
    <!-- Mostrar contador -->
    <h3>Visitas: <?php echo $visitas; ?></h3>

    <!-- Mensaje Alvaro -->
    <?php echo $mensaje_alvaro; ?>

    <!-- Formulario para borrar la cookie Alvaro -->
    <form action="" method="post">
        <button type="submit" name="eliminar" value="1">Eliminar cookie Alvaro</button>
    </form>
</body>
</html>