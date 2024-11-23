<?php
session_start();
    if (isset($_POST) && $_SESSION["victoria"] == false && $_SESSION["empate"] == false) {
        
        if ($_SESSION["modo"] == "ia" && $_SESSION["turno"] == true) {
            $columnaSeleccionada = rand(0,5);
            cambiarColor($columnaSeleccionada);
            empate();
            verificacionHorizontal();
            verificacionVertical();
            verificacionDiagonalHorizontalD();
            verificacionDiagonalInversa();
            
            if ($_SESSION["victoria"] == false) {
                cambiarTurno();
            }
            
        } else {
            $columnaSeleccionada = intval($_POST["envio"]);
            cambiarColor($columnaSeleccionada);
            empate();
            verificacionHorizontal();
            verificacionVertical();
            verificacionDiagonalHorizontalD();
            verificacionDiagonalInversa();
            if ($_SESSION["victoria"] == false) {
                cambiarTurno();
            }
       }
    }

    header("location: juego.php");
    function cambiarColor($columnaSeleccionada){
        
        $encontrado = false;
        $i = 6;

        while ($i>0 && $encontrado != true) {
            if ($_SESSION["posiciones"][$i][$columnaSeleccionada] == 0) {

                if ($_SESSION["turno"] == false) {
                    $_SESSION["posiciones"][$i][$columnaSeleccionada] = 1;
                } else {
                    $_SESSION["posiciones"][$i][$columnaSeleccionada] = 2;
                }

                $encontrado = true;
            } else {
                $i--;
            }
        }

        if ($encontrado == false) {
            cambiarTurno();
        }
    }

    function verificacionVertical(){
        $ganar = false;
        $i = 0;
        while ($i<6 && $ganar == false) {
            if ($_SESSION["turno"] == false) {
                $ganar = verificacionSegunJugador($i, $ganar, 1, "vertical");
            } else {
                $ganar = verificacionSegunJugador($i, $ganar, 2, "vertical");
            }
            $i++;
        }
    }

    function verificacionHorizontal(){
        $ganar = false;
        $i = 6;
        while ($i>0 && $ganar == false) {
            if ($_SESSION["turno"] == false) {
                $ganar = verificacionSegunJugador($i, $ganar, 1, "horizontal");
            } else {
                $ganar = verificacionSegunJugador($i, $ganar, 2, "horizontal");
            }
            $i--;
        }
    }

    function verificacionDiagonalHorizontalD(){
        $ganar = false;
        $i = 6;
        while ($i>0 && $ganar == false) {
            if ($_SESSION["turno"] == false) {
                $ganar = verificacionSegunJugador($i, $ganar, 1, "diagH");
            } else {
                $ganar = verificacionSegunJugador($i, $ganar, 2, "diagH");
            }
            $i--;
        }
    }

    function verificacionDiagonalInversa(){
        $ganar = false;
        $i = 6;
        while ($i>=3 && $ganar == false) {
            if ($_SESSION["turno"] == false) {
                $ganar = verificacionSegunJugador($i, $ganar, 1, "diagI");
            } else {
                $ganar = verificacionSegunJugador($i, $ganar, 2, "diagI");
            }
            $i--;
        }
    }

    function verificacionSegunJugador($i, $ganar, $colorDeJugador, $direccion){
        $numeroDeAciertos = 0;

        if ($direccion == "horizontal") {
            
            for ($j=0; $j < 6; $j++) { 
                if ($_SESSION["posiciones"][$i][$j] == $colorDeJugador) {
                    $numeroDeAciertos++;
                    if ($numeroDeAciertos >= 4) {
                        $_SESSION["victoria"] = true;
                        $ganar = true;
                    }
                } else {
                    $numeroDeAciertos = 0;
                }
            }

        } else if($direccion == "vertical"){

            for ($j=6; $j > 0; $j--) { 
                if ($_SESSION["posiciones"][$j][$i] == $colorDeJugador) {
                    $numeroDeAciertos++;
                    if ($numeroDeAciertos >= 4) {
                        $_SESSION["victoria"] = true;
                        $ganar = true;
                    }
                } else {
                    $numeroDeAciertos = 0;
                }
            }
            
        } else if($direccion == "diagH"){

            for ($posicion=0; $posicion < 3; $posicion++) { 
                if ($_SESSION["posiciones"][$i][$posicion] == $colorDeJugador && $_SESSION["posiciones"][$i-1][$posicion+1] == $colorDeJugador && $_SESSION["posiciones"][$i-2][$posicion+2] == $colorDeJugador && $_SESSION["posiciones"][$i-3][$posicion+3] == $colorDeJugador) {
                    $_SESSION["victoria"] = true;
                    $ganar = true;
                } else {
                    $numeroDeAciertos = 0;
                }
            }

        } else if($direccion == "diagI"){

            for ($posicion=5; $posicion > 2; $posicion--) { 
                if ($_SESSION["posiciones"][$i][$posicion] == $colorDeJugador && $_SESSION["posiciones"][$i-1][$posicion-1] == $colorDeJugador && $_SESSION["posiciones"][$i-2][$posicion-2] == $colorDeJugador  && $_SESSION["posiciones"][$i-3][$posicion-3] == $colorDeJugador) {
                    $_SESSION["victoria"] = true;
                    $ganar = true;
                } else {
                    $numeroDeAciertos = 0;
                }
            }

        }
        return $ganar;
    }

    function empate(){
        $empate = true;
        for ($i=1; $i < 7; $i++) { 
            for ($j=0; $j < 6; $j++) { 
                if ($_SESSION["posiciones"][$i][$j] == 0) {
                    $empate = false;
                }
            }
        }
        $_SESSION["empate"] = $empate;
    }

    function cambiarTurno(){
        if ($_SESSION["turno"] == false) {
            $_SESSION["turno"] = true;
        } else {
            $_SESSION["turno"] = false;
        }
    }
?>