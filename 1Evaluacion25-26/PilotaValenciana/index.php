<?php
session_start();
$left=0;
$top=0;

//pared 
echo"<table>";
for ($i=0; $i <= 1; $i++) {
    echo"<tr>";
    for ($z=0; $z <= 1; $z++) { 
        echo"<td></td>";
    }
}
echo"</table>";



if(!isset($_SESSION['pelotas'])){

    $_SESSION['pelotas']=[];




}else{


if(isset($_POST['borrar'])){
  session_destroy();
}  

 if(isset($_POST['AI'])){

    array_push($_SESSION['pelotas'],['left'=>$left=rand(10,150),'top'=>$top=rand(10,150)]);

   
 }  
 
 if(isset($_POST['BI'])){

    array_push($_SESSION['pelotas'],['left'=>$left=rand(10,150),'top'=>$top=rand(155,300)]);

 }

 if(isset($_POST['AD'])){

     array_push($_SESSION['pelotas'],['left'=>$left=rand(150,300),'top'=>$top=rand(10,150)]);

 }

 if(isset($_POST['BD'])){

    array_push($_SESSION['pelotas'],['left'=>$left=rand(150,300),'top'=>$top=rand(155,300)]);

 }
//pelotas
foreach ($_SESSION['pelotas'] as $key => $value) {
    $top=$value["top"];
    $left=$value["left"];
    
    echo"<div class='rojo' style='top:{$top}px; left:{$left}px'></div>";
 }
 

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
            background-color:red;
            position:absolute;
            height:10px;
            width:10px;
            border-radius:50%;
            top:0px;
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