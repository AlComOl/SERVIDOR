<?php
session_start();

if(isset($_POST['reset'])){
    session_destroy();
}


if(!isset($_SESSION['juego'])){

    for ($i=0; $i < 9 ; $i++) { 
      $_SESSION['juego'][$i]=[0,0,0,0,0,0];
      echo"<br>";
    }
     $_SESSION['fila']=4;
     $_SESSION['col']=2;
     $_SESSION['juego'][4][2]=1;

}else{

 


            if(isset($_POST['izq'])){
              $_SESSION['juego'][$_SESSION['fila']][$_SESSION['col']] = 0;
              $_SESSION['col'] = $_SESSION['col']-1;
              if ($_SESSION['col'] < 0) {
                  $_SESSION['col'] = 4; // columna máxima
                }
              $_SESSION['juego'][$_SESSION['fila']][$_SESSION['col']]=1;
             
            }
            if(isset($_POST['arr'])){
                $_SESSION['juego'][$_SESSION['fila']][$_SESSION['col']] = 0;
                $_SESSION['fila']=$_SESSION['fila']-1;
                if ($_SESSION['fila'] < 0) {
                    $_SESSION['fila'] = 8; // columna máxima
                 }
            $_SESSION['juego'][$_SESSION['fila']][$_SESSION['col']]=1; 
              


             
                
            }
            if(isset($_POST['der'])){
              $_SESSION['juego'][$_SESSION['fila']][$_SESSION['col']] = 0;
              $_SESSION['col']=$_SESSION['col']+1;
                if ($_SESSION['col'] < 0) {
                    $_SESSION['col'] = 4; // columna máxima
                }
              $_SESSION['juego'][$_SESSION['fila']][$_SESSION['col']]=1;
            
            }
        if(isset($_POST['abaj'])){
           $_SESSION['juego'][$_SESSION['fila']][$_SESSION['col']] = 0;
           $_SESSION['fila']=$_SESSION['fila']+1;
             if ($_SESSION['fila'] > 8) {
                    $_SESSION['fila'] = 0; // columna máxima
             }
            $_SESSION['juego'][$_SESSION['fila']][$_SESSION['col']]=1;  
            
        }
     
        }


echo"<table>";
for ($i=0; $i <9 ; $i++) { 
    echo"<tr>";
    for ($x=0; $x <5 ; $x++) { 

        if($_SESSION['juego'][$i][$x]===1){

            echo "<td style='background-color:red;'></td>";

        }else{

            echo"<td></td>";
        }
    }
    echo" </tr>";
}
echo"</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
</head>
<style>
    
    table{
        border:2px solid black;
    }
    td,tr{
        border:2px solid black;
        height: 40px;
        width: 80px;
    }

    button{
        background-color:yellow;
        border:2px solid black;
        height: 40px;
        width: 60px;
        margin:10px;

    }
    </style>
<body>

<form  method="post">
    <div>
    <button name="izq" value="-1">izquierda</button><button name="der" value="1">derecha</button>
    <button name="arr" value="1">arriba</button><button name="abaj" value="-1">abajo</button>
    <button name="reset">reset</button>
    </div>
</form>
    
</body>
</html>