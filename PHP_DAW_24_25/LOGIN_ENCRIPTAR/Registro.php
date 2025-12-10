<?php
session_start();
$dsn = 'mysql:dbname=dbname;host=db:3306'; //nombre Base datos y dónde está la BD
$usuario = 'test';
$contrasena = 'test';


try {

$conexion = new PDO($dsn, $usuario, $contrasena);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexión Establecida con la BD en Docker";

if(isset($_POST['enviado'])){

    if($_POST['password']==$_POST['password2']){

        echo "Usuario y contraseña introduccidos";

       

        $passEncriptado=password_hash($_POST["password"],PASSWORD_DEFAULT);
        $user=$_POST["user"];
    
     
    }

}

$passEncriptado=$_SESSION['passEncriptado'];


$sql = "INSERT INTO datos (usuario,pass) VALUES ($user, $passEncriptado)";
$conexion->exec($sql);
echo "Nuevo registro creado Correctamente";

}

catch (PDOException $e) { //en caso de detectar un error lo muestra
    echo 'Falló la conexión: ' . $e->getMessage();
    }
    
    $conexion = null; //cierra conexión



if (isset($_POST['toLogin'])) {
    header("Location: ./Login.php"); // Redirección correcta
    exit(); // Detiene el script
}

?>

<form action="" method="POST">
    <div>
        <h1>REGISTRO</h1>
    <div >
    <p>Usuario</p>
    <input type="text" name="user">
    </div>
    <div >
    <p>Password</p>
    <input type="password" name="password">
    </div>
    <div >
    <p>Vuelve a introducir el Password</p>
    <input type="password" name="password2">
    </div>
    <br>
</div>

<input type="submit" value="enviar" name="enviado">
<input type="submit" value="IR A LOGIN" name="toLogin">
</form>










