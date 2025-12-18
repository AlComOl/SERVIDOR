<?php
include("./LogicaAbstract.php");
session_start();

// 1. GESTIÓN DE LA SESIÓN (Vital para que el objeto no se borre)
if (!isset($_SESSION['objeto_juego'])) {
    $_SESSION['objeto_juego'] = new Conecta(); // O new TresRaya()
}

$juego = $_SESSION['objeto_juego'];
$mensaje = "";

// 2. ACCIONES
if (isset($_POST['accion'])) {
    $pos = explode('-', $_POST['accion']);
    $f = (int)$pos[0];
    $c = (int)$pos[1];

    if (!$juego->hayGanador()) {
        $juego->insertarFicha($f, $c);
    }
}

if (isset($_POST['restart'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$ganador = $juego->hayGanador();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Juego Abstracto</title>
    <style>
        .celda { width: 50px; height: 50px; border: 1px solid black; text-align: center; }
        .ficha-1 { background-color: red; border-radius: 50%; width: 100%; height: 100%; display: block; }
        .ficha-2 { background-color: blue; border-radius: 50%; width: 100%; height: 100%; display: block; }
        .boton-invisible { width: 100%; height: 100%; cursor: pointer; background: transparent; border: none; }
        table { border-collapse: collapse; margin: 20px 0; }
    </style>
</head>
<body>
    <h1>Turno del Jugador: <?php echo $juego->getJugador(); ?></h1>
    
    <?php if ($ganador) echo "<h2>¡$ganador!</h2>"; ?>

    <form method="post">
        <table>
            <?php
            $tablero = $juego->getTablero();
            for ($f = 0; $f < $juego->getFilas(); $f++) {
                echo "<tr>";
                for ($c = 0; $c < $juego->getColumnas(); $c++) {
                    echo "<td class='celda'>";
                    
                    if ($tablero[$f][$c] === 0 && !$ganador) {
                        // Botón para insertar ficha
                        echo "<button name='accion' value='$f-$c' class='boton-invisible'>⬇️</button>";
                    } else {
                        // Dibujar ficha si existe
                        if ($tablero[$f][$c] === 1) echo "<span class='ficha-1'></span>";
                        if ($tablero[$f][$c] === 2) echo "<span class='ficha-2'></span>";
                    }
                    
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <button type="submit" name="restart">Reiniciar Partida</button>
    </form>
</body>
</html>