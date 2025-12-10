<?php
session_start();

if(isset($_SESSION["nombre"])){

    $_SESSION=[];


}

?>

<form action="./siguiente.php" method="post">

    <input type="text" name="nombre" id="">Nombre
    <input type="number" name="numero" id="">Numero
    <button type="submit">enviar</button>

</form>