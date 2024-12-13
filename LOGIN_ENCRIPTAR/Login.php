<?php
session_start();

if(password_verify($_POST['pass'], $passEncriptado)) {
    echo"OK";
} else {
    echo"KO";
}
?>

<form action="" method="POST">
    <div>
        <h1>REGISTRO</h1>
    <div >
    <p>Usuario</p>
    <input type="text" name="usuario">
    </div>
    <div >
    <p>Password</p>
    <input type="password" name="password">
    </div>
    <br>
</div>

<input type="submit" value="enviar" name="enviado">
</form>