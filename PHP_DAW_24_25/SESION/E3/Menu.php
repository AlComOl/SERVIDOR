<?php
if(isset($_SESSION["valor"])){
setcookie("valor", 1, time() + 30);
}

session_start();
ob_start();//permite que salga el mensaje de php sin warnings
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         if (isset($_POST["salir"])) {
            header("location: login.php");
            session_destroy();

        }
        if($_SESSION["rol"]=="ROLE_ALUMNO"){
            echo "<h2>MENU ALUMNO</h2>";
        }else{
            echo "<h2>MENU PROFESOR</h2>";
        }


        echo"<p>".$_SESSION["nombre"]."</p>";


        
       


?>

    <form action="menu.php" method="post">
        <input type="submit" name="salir" value="Salir">
    </form>

        
</body>
</html>