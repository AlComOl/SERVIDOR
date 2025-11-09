<?php
session_start();


$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['numero']=$_POST['numero'];



$_SESSION['numero']=$_SESSION['numero']+10;

echo"<br><br>";

echo $_SESSION["numero"];
echo $_SESSION['nombre'];


echo"<br><br><br><br><br>";


 echo"<a href='./ultima.php'>Ir a la página 2</a>";
?>