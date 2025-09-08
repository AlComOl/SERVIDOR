<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>

<?php if($_SESSION["alumno"]===true) : ?>
<div style="display: flex; justify-content:space-between"> 
    <div><h1>Menu Alumno </h1></div>
     <form method="post" action="autenticar.php">
         <div><button name="salir" value="" "style="color:red">Salir</button></div>
     </form>
</div>
<?php endif; ?>

<?php if($_SESSION["profesor"]===true) : ?>
<div style="display: flex; justify-content:space-between">
    <h1>Menu Profesor </h1>
    <form method="post" action="autenticar.php">
        <div><button name="salir" value="" style="color:red">Salir</button></div>
    </form>
</div>
<?php endif; ?>

    
</body>
</html>