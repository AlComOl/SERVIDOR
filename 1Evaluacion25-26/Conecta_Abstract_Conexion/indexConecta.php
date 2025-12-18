<?php
include("./logicaConecta.php");
session_start();

if (isset($_POST['eliminar'])) {
    session_destroy();
   
}

if (!isset($_SESSION['juego'])) {
    $_SESSION['juego'] = $NuevoJuego;
    $_SESSION['guardado'] = false; //  BD
}

$NuevoJuego = $_SESSION['juego'];

if (isset($_POST["columna"])) {
    $NuevoJuego->insertarFila($_POST["columna"]);
    $_SESSION['juego'] = $NuevoJuego;
}

$tablero = $NuevoJuego->getJuegoConecta();
$ganador = $NuevoJuego->hayGanador();

// Guardar en BD si alguien gana
if ($ganador) {
    if ($_SESSION['guardado'] == false) {
        $cuenta = 0;
        foreach ($tablero as $col) { $cuenta += count($col); }
        $NuevoJuego->guardarEnBD($ganador, $cuenta);
        $_SESSION['guardado'] = true;
    }
}

//botones
echo "<table>";
echo "<div class='display'>";
for ($s = 0; $s < 6; $s++) {
    $cant = count($tablero[$s]);
    $disabled = "";
    if ($cant >= 6 || $ganador) { $disabled = "disabled"; }

    echo "<form method='post' style='display:inline'>
            <button type='submit' name='columna' value='$s' $disabled>⬇️</button>
          </form>";
}
//ganador

for ($i = 5; $i >= 0; $i--) {
    echo "<tr>";
    for ($z = 0; $z < 6; $z++) {
        if (isset($tablero[$z][$i])) {
            $color = ($tablero[$z][$i] == 1) ? "red" : "yellow";
            echo "<td style='background-color:$color; width:40px; height:40px; border:1px solid black'></td>";
        } else {
            echo "<td style='background-color:white; width:40px; height:40px; border:1px solid black'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";

if ($ganador) {
    echo "<h2>GANADOR: " .$ganador . "</h2>";
}

echo "<form method='post'><button type='submit' name='eliminar'>Reiniciar</button></form>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="./css/style.css">
    <title>Conecta4</title>
</head>
<body></body>
</html>