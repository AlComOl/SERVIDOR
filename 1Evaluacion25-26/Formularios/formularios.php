<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./enviar.php" method="GET">
            <input type="text" name="nombre" id="">
            <input type="text" name="mail" id="">

            <input type="submit" name="boton" value="enviar">
    </form>


<br><br><br><br>

</form>

<form action="./recibir.php" method="GET">


<select name="lenguajes[]" multiple="true">
    <option value="c">C</option>
    <option value="java">Java</option>
    <option value="php">PHP</option>
    <option value="python">Python</option>
</select>
<br>
    <input type="checkbox" name="curso[]" value="daw" /> daw <br/>
    <input type="checkbox" name="curso[]" value="asir" /> asir<br/>
    <input type="checkbox" name="curso[]" value="smr" /> smr<br/>
    <input type="checkbox" name="curso[]" value="universidad" /> universidad <br/>

<input type="submit" name="enviar" value="Enviar">

</form>
</body>
</html>


<?php
//get manda la informacion por la url , no puedes enviar imagenes 

//post manda infomacion junta pero  no esta protegida 
?>