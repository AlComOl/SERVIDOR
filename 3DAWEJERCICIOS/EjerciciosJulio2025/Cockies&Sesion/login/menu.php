<?php
session_start();

if(isset($_POST['salir'])){
    session_destroy();
    header("Location: ./index.php"); // Redirige

}

$usuario=$_SESSION['usuario'];
$rol=$_SESSION['rol'];
                                            
echo"<div style='width:50px;height:20px; background-color:green;'>$usuario</div><div style='width:100px;height:20px; background-color:blue;'>$rol</div>
</div>";

echo"ESTAS EN EL MENU PRINCIPAL";

echo"<form method='post'./index.php'><button name='salir'>SALIR</button></form>";



 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

