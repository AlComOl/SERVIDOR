<?php
echo"<table>";
for ($i=0; $i <= 1; $i++) {
    echo"<tr>";
    for ($z=0; $z <= 1; $z++) { 
        echo"<td></td>";
    }
    echo"</td>";
}
echo"</table>";


if(isset($_POST['AI'])){

    $_SESSION['AI'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilota</title>
    <style>
        table{
            border:solid black 1px;

        }
        td,tr{
            border:solid 1px black;
            width: 150px;
            height: 150px;
        }
        .rojo{
            blackground-color:red;
            position:absolute;
            height:10px;
            width:10px;
            border-radius:50%;
            top:opx;
            left:0px
        }

        button{
            height:50px;
            width:50px;
        }
    </style>
</head>
<body>

<form method="post">

        <button name="AI" value="">AI</button><button name="AD" value="">AD</button>
        <button name="BI" value="">BI</button><button name="BD" value="">BD</button><br>
        <button name="borrar" value="">Borrar</button>
</form>


    
</body>
</html>