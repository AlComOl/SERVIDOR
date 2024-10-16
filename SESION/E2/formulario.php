<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar.php" method="POST">
    <br>
        <div>
         <label for="quantity">TECLADO</label>
         <input type="number" id="quantity1" name="tel" min="1" max="5">
         <input type="submit"> 
        </div> 
        <br>
        <div>
         <label for="quantity">PANTALLA</label>
         <input type="number" id="quantity2" name="pan" min="1" max="5">
         <input type="submit"> 
        </div>
        <br>
        <div>
         <label for="quantity">RATON</label>
         <input type="number" id="quantity3" name="rat" min="1" max="5">
         <input type="submit"> 
        </div>
        <br>
        <div>
         <label for="quantity">CPU</label>
         <input type="number" id="quantity4" name="cpu" min="1" max="5">
         <input type="submit"> 
        </div>

    </form>
    
</body>
</html>