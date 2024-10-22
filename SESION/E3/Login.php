<?php
session_start();
    if(isset($_SESSION["vacio"])){

        echo "<h3>Los campos están vacíos</h3>";
    }


    ?> 

<form action="./Autentificar.php" method="POST">
<div>
    <h3 name="vacio"></h3>

    <label for="username">USER</label>
    <input type="text"  name="username">

    <label for="password">PASSWORD</label>
    <input type="password" name="password">

    <button type="submit" name="entrar">ENVIAR</button>
    <br>
    <input type="checkbox" name="valor">Recordar

    <!-- <button type="submit" name="salir">LOGOUT</button> -->
</div>
    
</form>
</form>
