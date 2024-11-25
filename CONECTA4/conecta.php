<?php
session_start();

// Incluye el archivo con las funciones de verificación
require_once 'verificar.php';

$jugador1 = 1;
$jugador2 = 2;

if (isset($_POST['borrar'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

//CREAR EL ARRAY SI NO EXISTE
if (!isset($_SESSION["tabla"])) {
    for ($i = 0; $i < 6; $i++) {
        $_SESSION["tabla"][] = [0, 0, 0, 0, 0, 0, 0];
    }

    $_SESSION["turno"] = rand(1, 2);
    echo "Empieza el Juego el Jugador " . $_SESSION["turno"];
}

//PULSAR BOTON INTRODUCE FICHA
if (isset($_POST["boton"])) {
    $j = 0;
    $columna = $_POST["boton"];
    $encontrado = false;

    while ($j < 6 && !$encontrado) {
        if ($_SESSION["tabla"][$j][$columna] === 0) {
            if (isset($_SESSION["turno"])) {
                if ($_SESSION["turno"] == 1) {
                    echo " EL TURNO ES DEL JUGADOR 2 ";
                    $_SESSION["tabla"][$j][$columna] = $jugador1;
                    $_SESSION["turno"] = 2;
                } else if ($_SESSION["turno"] == 2) {
                    echo " EL TURNO ES DEL JUGADOR 1 ";
                    $_SESSION["tabla"][$j][$columna] = $jugador2;
                    $_SESSION["turno"] = 1;
                }
            } else {
                $_SESSION["tabla"][$j][$columna] = $jugador1;
            }

            if (verificacionVertical() || verificacionHorizontal() || verificacionDiagonalHorizontalD() || verificacionDiagonalInversa()) {
                echo "<p>¡Jugador " . ($_SESSION["turno"] == 1 ? 2 : 1) . " gana!</p>";
               
            }

            $encontrado = true;
        }
        $j++;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CONECTA 4</title>
</head>
<body>

<form action="" method="post">
    <table>
        <?php
        for ($x = 5; $x >= 0; $x--) {
            echo "<tr>";
            for ($z = 0; $z <= 6; $z++) {
                if (isset($_SESSION["tabla"][$x][$z])) {
                    $celda = $_SESSION['tabla'][$x][$z];
                    if ($celda == 1) {
                        echo "<td style='background-color: red;'></td>";
                    } else if ($celda == 2) {
                        echo "<td style='background-color: yellow;'></td>";
                    } else {
                        echo "<td></td>";
                    }
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

    <div class="botones">
        <button type="submit" name="boton" value="0" <?php if ($_SESSION['tabla'][5][0] != 0) echo "disabled"; ?>> + </button>
        <button type="submit" name="boton" value="1" <?php if ($_SESSION['tabla'][5][1] != 0) echo "disabled"; ?>> + </button>
        <button type="submit" name="boton" value="2" <?php if ($_SESSION['tabla'][5][2] != 0) echo "disabled"; ?>> + </button>
        <button type="submit" name="boton" value="3" <?php if ($_SESSION['tabla'][5][3] != 0) echo "disabled"; ?>> + </button>
        <button type="submit" name="boton" value="4" <?php if ($_SESSION['tabla'][5][4] != 0) echo "disabled"; ?>> + </button>
        <button type="submit" name="boton" value="5" <?php if ($_SESSION['tabla'][5][5] != 0) echo "disabled"; ?>> + </button>
        <button type="submit" name="boton" value="6" <?php if ($_SESSION['tabla'][5][6] != 0) echo "disabled"; ?>> + </button>
    </div>
</form>

<form action="" method='post'>
    <button type="submit" name="borrar"id="sesion" value="borrar">Buton</button>
    <button type='submit' id='iniciar' name='borrar'>Empezar Juego</button>
</form>
</body>
</html>
