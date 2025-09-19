<?php
session_start();
    if(isset($_SESSION["vacio"])){

        echo "<h3>Los campos están vacíos</h3>";
    }

    if(isset($_SESSION['usuarioEncontrado']) && $_SESSION['usuarioEncontrado'] === false){
        echo "<h3>Usuario o password incorrectos</h3>";
    }


    ?> 

<form action="./Autentificar.php" method="POST">
<div>
    <h3 name="vacio"></h3>

    <label for="username">USER</label>
    <!-- aqui verifica si existe la cookie -->
    <input type="text"  name="username" value="<?php 
    if(isset($_COOKIE["galleta"])){
        echo $_COOKIE["galleta"];
    }?>">

    <label for="password">PASSWORD</label>
    <input type="password" name="password">

    <button type="submit" name="entrar">ENVIAR</button>
    <br>
    
    <input type="checkbox" name="recordar">Recordar

    <!-- <button type="submit" name="salir">LOGOUT</button> -->
</div>
    
</form>
</form>
