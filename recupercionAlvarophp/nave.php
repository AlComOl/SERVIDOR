<?php
session_start();
$der=1;
$iz=-1;
$ar=1;
$ba=-1;

// Falta el over flow si se sale del tablero


if(!isset($_SESSION["tabla"])){
   
    for ($z=0; $z <9 ; $z++) { 
        $_SESSION["tabla"][]=[0,0,0,0,0];
    }

    // $_SESSION["tabla"][4][2]=1;
    $_SESSION["y"] = 4; 
    $_SESSION["k"] = 2; 
    $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 1;

 }else{

    if(isset($_POST["boton"])){
    
                if($_POST["boton"]==0){
                    echo"Hola mundo";
                        $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 0;
                        $_SESSION["k"] += $der;  
                        $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 1;
                     }

                if($_POST["boton"]==1){
                    echo"Hola izquierda";
                            $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 0;
                            $_SESSION["k"] += $iz;  
                            $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 1;
                         }
                if($_POST["boton"]==2){
                    echo"Hola mundo";
                            $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 0;
                            $_SESSION["y"] += $ba;  
                            $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 1;
                             }
                if($_POST["boton"]==3){
                    echo"Hola mundo";
                            $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 0;
                            $_SESSION["y"] += $ar;  
                            $_SESSION["tabla"][$_SESSION["y"]][$_SESSION["k"]] = 1;
                                 }
                   
                
                if($_POST["boton"]==4){
                    echo"Hola mundo";
                    session_destroy();
                    // header('Location: ./nave.php');
                }
            
    }

 }
echo"<table>";
for ($i=0; $i <9 ; $i++) {       
    echo"<tr>";
  
    for ($j=0; $j <5; $j++) { 
        if ($_SESSION["tabla"][$i][$j] == 1) {
          
            echo"<td style='background:red;'></td>";
        
         }else{
            echo"<td></td>"; 

        }
    }
    echo"</tr>";
} 
echo"</table>"; 

?>
<!DOCTYPE html>
<html lang="es">
    <style>

        table{
            position: absolute;
            height: 500px;
            right: 1000px;
            
        }
   
        td{
            border: 1px solid ;
            padding-left: 10px;
            padding-right: 80px;

        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form  method="post">
    <div class="botones">
        <button type="submit" name="boton" value="0">derecha</button>
        <button type="submit" name="boton" value="1">izquierda</button>
        <button type="submit" name="boton" value="2">Arriba</button>
        <button type="submit" name="boton" value="3">Abajo</button>
        <button type="submit" name="boton" value="4">Reset</button>
    </div>
</form>  


   



