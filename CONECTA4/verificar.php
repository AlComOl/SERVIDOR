<?php
function verificacionVertical(){
    $ganar = false;
    for ($columna = 0; $columna < 7 && !$ganar; $columna++) {
        $ganar = verificacionSegunJugador($columna, "vertical");
    }
    return $ganar;
}

function verificacionHorizontal(){
    $ganar = false;
    for ($fila = 0; $fila < 6 && !$ganar; $fila++) {
        $ganar = verificacionSegunJugador($fila, "horizontal");
    }
    return $ganar;
}

function verificacionDiagonalHorizontalD() {
    $ganar = false;
    for ($fila = 0; $fila < 3; $fila++) {
        for ($columna = 0; $columna < 4; $columna++) {
            if ($_SESSION['tabla'][$fila][$columna] != 0 &&
                $_SESSION['tabla'][$fila][$columna] == $_SESSION['tabla'][$fila+1][$columna+1] &&
                $_SESSION['tabla'][$fila][$columna] == $_SESSION['tabla'][$fila+2][$columna+2] &&
                $_SESSION['tabla'][$fila][$columna] == $_SESSION['tabla'][$fila+3][$columna+3]) {
                $ganar = true;
            }
        }
    }
    return $ganar;
}

function verificacionDiagonalInversa() {
    $ganar = false;
    for ($fila = 3; $fila < 6; $fila++) {
        for ($columna = 0; $columna < 4; $columna++) {
            if ($_SESSION['tabla'][$fila][$columna] != 0 &&
                $_SESSION['tabla'][$fila][$columna] == $_SESSION['tabla'][$fila-1][$columna+1] &&
                $_SESSION['tabla'][$fila][$columna] == $_SESSION['tabla'][$fila-2][$columna+2] &&
                $_SESSION['tabla'][$fila][$columna] == $_SESSION['tabla'][$fila-3][$columna+3]) {
                $ganar = true;
            }
        }
    }
    return $ganar;
}


function verificacionSegunJugador($index, $direccion) {
    // Determinamos el jugador contrario sin usar ternarios
    if ($_SESSION["turno"] == 1) {
        $jugador = 2;
    } else {
        $jugador = 1;
    }

    $contador = 0;
    $ganar = false; 

    for ($i = 0; $i < 6; $i++) {
        // Verificamos la dirección con if/else
        if ($direccion == "vertical") {
            $celda = $_SESSION["tabla"][$i][$index];
        } elseif ($direccion == "horizontal") {
            $celda = $_SESSION["tabla"][$index][$i];
        } elseif ($direccion == "diagH") {
            if (isset($_SESSION["tabla"][$i][$i])) {
                $celda = $_SESSION["tabla"][$i][$i];
            } else {
                $celda = 0;
            }
        } elseif ($direccion == "diagI") {
            if (isset($_SESSION["tabla"][$i][5 - $i])) {
                $celda = $_SESSION["tabla"][$i][5 - $i];
            } else {
                $celda = 0;
            }
        } else {
            $celda = 0;
        }

        // Verificamos si la celda pertenece al jugador
        if ($celda == $jugador) {
            $contador++;
        } else {
            $contador = 0;
        }

        // Si encontramos 4 fichas seguidas, marcamos como ganador
        if ($contador == 4) {
            $ganar = true;
        }
    }

    // Al final, retornamos si se ha encontrado una secuencia ganadora
    return $ganar;
}

?>
