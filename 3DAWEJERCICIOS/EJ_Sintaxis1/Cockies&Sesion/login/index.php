<?php
session_start();

if(isset($_SESSION['incorrecto'])){

    echo "<h5 style='background-color:red; padding:5px;'>Usuario o password incorrecto</h5>";

    }

if(isset($_SESSION['vacio'])){
         echo "<h5 style='background-color:red; padding:5px;'>Usuario o password VACIOS</h5>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        body {
            display: flex;
            justify-content: center; 
            align-items: center;  
            }

        .container{
        
           display: flex;              /* activa flexbox */
            justify-content: center;    /* centra horizontalmente */
            align-items: center;        /* centra verticalmente */
            height: 30vh;   
            width: 50vh;           /* opcional: altura de la pantalla */
            border: 1px solid #000;
            background-color: lightblue;     /* solo para ver el contenedor */
        }
        label,input,button {
        padding: 10px;
        
        margin: 5px;
        }
        
    </style>
</head>
<body>

<div class="container">
    <form action="./autenticar.php" method="post">
        <label>Usuario: </label>
        <input type="text" name="usuario" value="">
        <label>Password: </label>
        <input type="text" name="pswd" value="">
        <button type="submit" name="enviar" value="">Enviar</button>
    </form>

</div>
    
</body>
</html>