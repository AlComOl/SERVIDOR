<?php
session_start();
// La primera tirada no va



if(isset($_POST["color"]) ){


    
    if ($_POST["color"] == $_SESSION["color"]) {
        $_SESSION["aciertos"]++;
    }
    else{
        $_SESSION["fallos"]++;
    }
    
    header('Location: ./simon.php');
}

$colores =["rojo", "azul","verde","amarillo"];
$num_azar = rand(0,3);
$color_azar = $colores[$num_azar];

$_SESSION["color"] = $color_azar;

if (!isset($_SESSION["aciertos"])) {
    $_SESSION["aciertos"] = 0;
    $_SESSION["fallos"] = 0;
}

echo" <h2> COLOR ALEATORI </h2>
    <div id='cuadradoAleatorio' class='$color_azar'></div>
        <br><br>";

if( isset($_POST["borrar"]) ){
    session_destroy();
    header('Location: ./simon.php');
}



?>
<h3>BOTONS</h3>
<form action="" method="post">
    <button name="color" value="rojo" class="rojo"></button>
    <button name="color" value="azul" class="azul"></button> <br>
    <button name="color" value="verde" class="verde"></button>
    <button name="color" value="amarillo" class="amarillo"></button>

    <br><br>
    <input type="submit" name="borrar" value="NUEVA PARTIDA">

</form>
<style>

 


.rojo{
    background-color: red;
}
.azul{
    background-color: blue;
}
.verde{
    background-color: green;
}
.amarillo{
    background-color: yellow;
}
#cuadradoAleatorio{
    padding: 100px;
}
</style>

<?php
echo "<h3>ACIERTOS : $_SESSION[aciertos]</h3>";
echo "<h3>FALLOS : $_SESSION[fallos]</h3>";
?>