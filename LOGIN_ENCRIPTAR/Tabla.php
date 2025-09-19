<?php
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
     
    
     
    }

}

$passEncriptado=$_SESSION['passEncriptado'];
$user=$_SESSION['user'];

$sql = "INSERT INTO datos (usuario,pass) VALUES ($user, $passEncriptado)";
$conexion->exec($sql);
echo "Nuevo registro creado Correctamente";

}

catch (PDOException $e) { //en caso de detectar un error lo muestra
    echo 'Falló la conexión: ' . $e->getMessage();
    }
    
    $conexion = null; //cierra conexión





?>