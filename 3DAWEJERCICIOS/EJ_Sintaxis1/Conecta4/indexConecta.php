<?php
include("./logicaConecta.php");

echo"<table>";
for ($i=0; $i < 6 ; $i++) {
    echo"<tr>";

    for ($z=0; $z < 6; $z++) { 
        echo"<td></td>";
    }
    echo"</tr>";
}
echo"</table>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f0f0f0;
    margin: 0;
}

table {
    border-collapse: collapse;
    background-color: #0047ab; 
    padding: 10px;
}

td {
    width: 80px;
    height: 80px;
    border-radius: 50%;       
    background-color: white; 
    margin: 5px;
}

button {
   display: column;
   margin-top: 560px;

    
}

button:hover {
    background-color: #ccc;
}
</style>
<body>
    <div class='botones'>
        <button name="1"value="">➕</button>
        <button name="2"value="">➕</button>
        <button name="3"value="">➕</button>
        <button name="4"value="">➕</button>
        <button name="5"value="">➕</button>
        <button name="6"value="">➕</button>
    </div>
</body>
</html>