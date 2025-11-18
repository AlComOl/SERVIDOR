<?php
session_start();

if(isset($_POST['borrar'])){
    session_destroy();
}

if(!isset($_SESSION['partida'])){

    for ($i=0; $i < 9; $i++) {
        $_SESSION['partida'][$i]=[0,0,0,0,0];
        echo"<br>";
    }
    $_SESSION['fila']=4;
    $_SESSION['columna']=2;
    $_SESSION['partida'][4][2]=1;


    // print_r($_SESSION['partida'] );



}else{

    if(isset($_POST['izq'])){
        echo"entra";
        $_SESSION['partida'][$_SESSION['fila']][$_SESSION['columna']]=0;
        $_SESSION['columna'] = $_SESSION['columna']-1;
                if($_SESSION['columna'] < 0){
                $_SESSION['columna'] = 4;
                }
                 $_SESSION['partida'][$_SESSION['fila']][$_SESSION['columna']]=1;
        }
        
    
    
    if(isset($_POST['der'])){
        $_SESSION['partida'][$_SESSION['fila']][$_SESSION['columna']]=0;
        $_SESSION['columna'] = $_SESSION['columna']+1;
                if($_SESSION['columna'] > 4){
                    $_SESSION['columna']=0;
                }  
                 $_SESSION['partida'][$_SESSION['fila']][$_SESSION['columna']]=1;

       
        }
    
    if(isset($_POST['arr'])){
        $_SESSION['partida'][$_SESSION['fila']][$_SESSION['columna']]=0;
        $_SESSION['fila'] = $_SESSION['fila']+1;
            if($_SESSION['fila'] < 0 ){
                $_SESSION['fila']= 8;
            }
            $_SESSION['partida'][$_SESSION['fila']][$_SESSION['columna']]=1;

        }
    
    if(isset($_POST['abj'])){
        $_SESSION['partida'][$_SESSION['fila']][$_SESSION['columna']]=0;
        $_SESSION['fila'] = [$_SESSION['fila']]-1;
            if($_SESSION['fila']>8){
                $_SESSION['flia']=0;
            }
            $_SESSION['partida'][$_SESSION['fila']][$_SESSION['columna']]=1;
       
        }
    
    }
  echo"<table>";
    for ($i=0; $i < 9; $i++) { 
        echo"<tr>";
        for ($z=0; $z < 5; $z++) { 
            if($_SESSION['partida'][$i][$z]===1){
                  echo"<td style='background-color:red;'></td>";
            }else{
                 echo"<td style='background-color:white;'></td>";
            }
        }
       echo"</tr>";
    }

 echo"</table>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        /* border: 1px solid black; */
    }
    td{
        width: 90px;
        height: 60px;
        border: 1px solid black;
    }
    button{
        width: 90px;
        height: 60px;
        border: 1px solid black; 
        margin:10px;
        color:grey;
    }
</style>
<body>
  <form method ="post">  
    <button name="izq" value="1">D</button><button name="der" value="-1">I</button><button name="arr" value="1">A</button><button name="abj" value="-1">B</button><button name="borrar">Borrar</button>
</form>
</body>
</html>