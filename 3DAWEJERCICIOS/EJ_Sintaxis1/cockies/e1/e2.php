<?php
if(isset($_COOKIE['alvaro'])){

    echo"<div style='background-color:'blue'><h1>Welcome</h1>";

}else{

    setcookie("valor", 1, time() + 10);
    echo"<div style='background-color:'red'><h1>Hola de nuevo</h1>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button name></button>
</body>
</html>