<?php
include("logicaConecta.php");
session_start();

if(!isset($_SESSION['juego']) || !($_SESSION['juego'] instanceof Conecta4)){
    $_SESSION['juego'] = new Conecta4();
}

$NuevoJuego = $_SESSION['juego'];

if(isset($_POST['eliminar'])){
    session_destroy();
   
}

if(isset($_POST['columna']) && !$NuevoJuego->hayGanador()){
    $col = (int)$_POST['columna'];
    if($NuevoJuego->insertarFila($col,1)){
        $NuevoJuego->jugarConIA();
    }
    $_SESSION['juego'] = $NuevoJuego;
}

$tablero = $NuevoJuego->getJuegoConecta();
$ganador = $NuevoJuego->hayGanador();
$datosBD = $NuevoJuego->obtenerDB();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Conecta 4</title>
 <link rel="stylesheet" href="./css/style.css">
<style>
table {
    margin:auto;
    border-collapse:collapse;
}
td {
    width:50px;
    height:50px;
    border:1px solid black;
   
}
.ficha-1 {
    background:red;
}
.ficha-2 {
    background:yellow;
}
button {
    width:50px;height:30px;margin:2px;
    }
</style>
</head>
<body>

<div style="text-align:center">
<p> Jugador:  | IA:  | Empates:</p>
</div>

<div style="text-align:center">
<?php
for($c=0;$c<6;$c++){
    echo '<form method="post" style="display:inline">';
    echo '<button name="columna" value="'.$c.'"';
    if($ganador) echo ' disabled';
    echo '>⬇️</button></form>';
}
?>
</div>

<table>
<?php
for($f=5;$f>=0;$f--){
    echo "<tr>";
    for($c=0;$c<6;$c++){
        $clase = "";
        if(isset($tablero[$c][$f])){
            if($tablero[$c][$f]==1) $clase="ficha-1";
            else $clase="ficha-2";
        }
        echo '<td class="'.$clase.'"></td>';
    }
    echo "</tr>";
}
?>
</table>

<?php
if($ganador){
    echo "<h2 style='text-align:center;'>".$ganador."</h2>";
}
?>

<form method="post" style="text-align:center">
<button name="eliminar">Reiniciar</button>
</form>

</body>
</html>
