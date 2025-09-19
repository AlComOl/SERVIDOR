<?php
session_start();
$d=1;
$a=-1;
$b=1;
$c=-1;



if(!isset($_SESSION["tabla"])){
    $_SESSION["tabla"] = [];
    for ($z=0; $z <9 ; $z++) { 
        $_SESSION["tabla"][]=[0,0,0,0,0];
    }

    $_SESSION["tabla"][4][2]=1;

 }else{

    if(isset($_POST["boton"])){
        for ($y=0; $y <9 ; $y++) { 
            for ($k=0; $k <5 ; $k++) { 
                if($_POST["boton"]==0){
                     if($_SESSION["tabla"][$y][$k]==1){
                        $_SESSION["tabla"][$y][$k]=0;
                        $_SESSION["tabla"][$y][$k+$d]=1;   
                     }
                }
                if($_POST["boton"]==1){
                    if($_SESSION["tabla"][$y][$k]==1){
                       $_SESSION["tabla"][$y][$k]=0;
                       $_SESSION["tabla"][$y][$k+$a]=1;   
                    }
               } if($_POST["boton"]==2){
                     if($_SESSION["tabla"][$y][$k]==1){
                        $_SESSION["tabla"][$y][$k]=0;
                        $_SESSION["tabla"][$y][$k+$a]=1;   
                     }
                } if($_POST["boton"]==3){
                    if($_SESSION["tabla"][$y][$k]==1){
                       $_SESSION["tabla"][$y][$k]=0;
                       $_SESSION["tabla"][$y][$k+$b]=1;   
                    }
               } if($_POST["boton"]==4){
                     if($_SESSION["tabla"][$y][$k]==1){
                        $_SESSION["tabla"][$y][$k]=0;
                     }
                    
                 }
                //  session_destroy();
                }
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

// session_destroy();
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
    <link rel="stylesheet" href="./css/style.css">
    <title>CUARTA DIMENSION</title>
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


   



