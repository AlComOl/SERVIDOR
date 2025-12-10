<?php
$dsn = 'mysql:dbname=testdb;host=db:3306';
$usuario = 'user';
$contrasena = 'pass123';

try {
    $conexion = new PDO($dsn, $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión Establecida con la BD en Docker";
} catch (PDOException $e) {       //en caso de detectar un error lo muestra
    echo 'Falló la conexión: ' . $e->getMessage();
}


?>