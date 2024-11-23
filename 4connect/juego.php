<?php
session_start();
    // Esta condicion es la que va a generar nuestra matriz de posiciones
    // Cada casilla representa una posicion en la matriz
    // El 0 representa el color blanco
    // El 1 representa el color amarillo
    // El 2 representa el color rojo 
    // Si el turno es false, significa que le toca al jugador de amarillo, al contrario, seria el rojo

    if (!isset($_SESSION["posiciones"])) {
        $_SESSION["posiciones"] = array();
        $x = rand(0,100);
        if ($x%3 == 0) {
            $_SESSION["turno"] = false;
        } else {
            $_SESSION["turno"] = true;
        }
        $_SESSION["empate"] = false;
        $_SESSION["victoria"] = false;
        for ($i=0; $i < 7; $i++) { 
            for ($j=0; $j < 6; $j++) { 
                $_SESSION["posiciones"][$i][$j] = 0;
            }
        }
    } 

    if(!isset($_SESSION["modo"])){
        $_SESSION["modo"] = $_POST["modo"];
    }

    if($_SESSION["turno"] == true && isset($_SESSION["modo"]) && $_SESSION["modo"] == "ia" && $_SESSION["victoria"] == false && $_SESSION["empate"] == false){
        header("location: procesador.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css">
    <title>Partida</title>
</head>
<body>
    <h1> <span style="color:yellow;">4</span>Connect</h1>

    <table style="width: 270px;">

        <?php
            for ($i=0; $i < 7; $i++) { 
                echo "<tr>";
                    for ($j=0; $j < 6; $j++) { 
                        $multiplicacion = $i; 
                        if ($i == 0) {
                            echo "<td style='height: 30px; width: 30px; background-color: red; padding: 5px'>";
                            echo "<form action='procesador.php' method='post' class='meter'>";
                                echo "<button type='submit' name='envio' value='$j'>meter</button>";
                            echo "</form>";
                        } else if($_SESSION["posiciones"][$i][$j] == 1) {
                            echo "<td style='height: 30px; width: 30px; background-color: yellow; '>";
                        } else if($_SESSION["posiciones"][$i][$j] == 2){
                            echo "<td style='height: 30px; width: 30px; background-color: red; '>";
                        } else {
                            echo "<td style='height: 30px; width: 30px; background-color: white; '>";
                        }

                        echo "</td>";
                    }
                echo "</tr>";
            }
        ?>
        <tr>
            <td style="background-color: black" colspan="6">
                <?php
                    if (isset($_SESSION["turno"])) {
                        if ($_SESSION["turno"] == false) {
                            echo "<p style='color: yellow; text-align: center'>Le toca al jugador 1</p>";
                        } else {
                            echo "<p style='color: red; text-align: center'>Le toca al jugador 2</p>";
                        }
                    }
                ?>
            </td>
        </tr>

        <tr>
            <td style="background-color: black" colspan="6">
                <?php
                    if (isset($_SESSION["turno"]) && isset($_SESSION["victoria"])) {
                        if ($_SESSION["turno"] == false && $_SESSION["victoria"] == true) {
                            echo "<p style='color: yellow; text-align: center'>Ha ganado el jugador 1</p>";
                            echo "<form action='reiniciar.php' method='post' class='reiniciar'>";
                            echo "<button type='submit'>Reiniciar partida</button>";
                            echo "</form>";
                        } else if($_SESSION["turno"] == true && $_SESSION["victoria"] == true){
                            echo "<p style='color: red; text-align: center'>Ha ganado el jugador 2</p>";
                            echo "<form action='reiniciar.php' method='post' class='reiniciar'>";
                            echo "<button type='submit'>Reiniciar partida</button>";
                            echo "</form>";
                        } else if($_SESSION["empate"] == true){
                            echo "<p style='color: white; text-align: center'>EMPATE</p>";
                            echo "<form action='reiniciar.php' method='post' class='reiniciar'>";
                            echo "<button type='submit'>Reiniciar partida</button>";
                            echo "</form>";
                        } else {
                            echo "<p style='color: white; text-align: center'>En progreso de ganar...</p>";
                        }
                    }
                ?>
            </td>
        </tr>
    </table>

</body>
</html>