<?php
session_start();

// Incluye el archivo con las funciones de verificacion
require_once 'verificar.php';

$jugador1 = 1;
$jugador2 = 2;
$ganador=false;
$gana="---";

if (isset($_POST['borrar'])) {
    session_destroy();
    header("Location: conecta.php");
    exit;
}

//CREAR EL ARRAY SI NO EXISTE
if (!isset($_SESSION["tabla"])) {
    for ($i = 0; $i < 6; $i++) {
        $_SESSION["tabla"][] = [0, 0, 0, 0, 0, 0, 0];
    }

    $_SESSION["turno"] = rand(1, 2);
    // echo "Empieza el Juego el Jugador " . $_SESSION["turno"];
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
                    // echo " EL TURNO ES DEL JUGADOR 2 ";
                    $_SESSION["tabla"][$j][$columna] = $jugador1;
                    $_SESSION["turno"] = 2;
                } else if ($_SESSION["turno"] == 2) {
                    // echo " EL TURNO ES DEL JUGADOR 1 ";
                    $_SESSION["tabla"][$j][$columna] = $jugador2;
                    $_SESSION["turno"] = 1;
                }
            } else {
                $_SESSION["tabla"][$j][$columna] = $jugador1;
            }

            if (verificacionV() || verificacionH() || verificacionDHD() || verificacionDI()) {

                if($_SESSION["turno"] == 1){
                    $gana=$jugador1;
                }else{
                   $gana=$jugador2;
                }
                
               $ganador=true;
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
        <button type="submit" name="boton" value="0" id="b"<?php if ($_SESSION['tabla'][5][0] != 0 || $ganador) echo "disabled"; ?>>⬇️</button>
        <button type="submit" name="boton" value="1" id="b"<?php if ($_SESSION['tabla'][5][1] != 0 || $ganador) echo "disabled"; ?>>⬇️</button>
        <button type="submit" name="boton" value="2" id="b"<?php if ($_SESSION['tabla'][5][2] != 0 || $ganador) echo "disabled"; ?>>⬇️</button>
        <button type="submit" name="boton" value="3" id="b"<?php if ($_SESSION['tabla'][5][3] != 0 || $ganador) echo "disabled"; ?>>⬇️</button>
        <button type="submit" name="boton" value="4" id="b"<?php if ($_SESSION['tabla'][5][4] != 0 || $ganador) echo "disabled"; ?>>⬇️</button>
        <button type="submit" name="boton" value="5" id="b"<?php if ($_SESSION['tabla'][5][5] != 0 || $ganador) echo "disabled"; ?>>⬇️</button>
        <button type="submit" name="boton" value="6" id="b"<?php if ($_SESSION['tabla'][5][6] != 0 || $ganador) echo "disabled"; ?>>⬇️</button>
    </div>
</form>
<div id="Turno">
<h1> JUGADOR GANADOR <?php echo" $gana" ?> </h1>
<br>
<h2>TURNO JUEGO <?php  print_r($_SESSION['turno']) ?></h2>
</div>
<div id="bajo">
<form  action="" method='post'>
    <button type="submit" name="borrar"id="sesion" value="borrar">Borar $_SESSION</button>
    <button type='submit' id='iniciar' name='borrar'>Empezar Juego</button>
</form>
</div>
</body>
</html>
