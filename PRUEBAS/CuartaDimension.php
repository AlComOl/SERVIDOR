<?php 
session_start();

if(isset($_POST["reset"])){
       session_destroy(); // borra datos del servidor
       setcookie(session_name(), '', time() - 3600); // borra cookie del navegador 
       session_start();
    }

    if(!isset($_SESSION["tabla"])){
    $_SESSION["tabla"]=[];
            for($f=0;$f<=6;$f++){
            $_SESSION["tabla"] [] = [0,0,0,0,0];
            }
            $_SESSION["tabla"][3][2]=1;
    }else{

        $encontrado=false;
         if(isset($_POST["abajo"])){
                for ($f=0; $f <=6 && !$encontrado  ; $f++) { 
                    for ($c=0; $c <=4 && !$encontrado; $c++) { 
                           if($_SESSION["tabla"][$f][$c]==1 ){
                            $fila=$f;
                            $col=$c;
                            $encontrado==true; 
                            }
                     }
                }
                if(isset($fila)&& $fila<6){
                    $_SESSION["tabla"] [$fila] [$col]=0;
                    $_SESSION["tabla"] [$fila+1] [$col]=1;
                }else{
                    $_SESSION["tabla"][0][$col]=1;
                    $_SESSION["tabla"][$fila][$col]=0;
                }
            }
            
         if(isset($_POST["arriba"])){
                for ($f=0; $f <=6 && !$encontrado  ; $f++) { 
                    for ($c=0; $c <=4 && !$encontrado; $c++) { 
                           if($_SESSION["tabla"][$f][$c]==1 ){
                            $fila=$f;
                            $col=$c;
                            $encontrado==true; 
                            }
                     }
                }
                if(isset($fila)&& $fila>0){
                    echo"$fila";
                    $_SESSION["tabla"] [$fila] [$col]=0;
                    $_SESSION["tabla"] [$fila-1] [$col]=1;
               }else{
                    $_SESSION["tabla"][6][$col]=1;
                    $_SESSION["tabla"][$fila][$col]=0;
                }
            }

          if(isset($_POST["derecha"])){
                   for ($f=0; $f <=6 && !$encontrado  ; $f++) { 
                    for ($c=0; $c <=4 && !$encontrado; $c++) { 
                           if($_SESSION["tabla"][$f][$c]==1 ){
                            $fila=$f;
                            $col=$c;
                            $encontrado==true; 
                            
                            }
                     }
                }
                if(isset($col)&& $col<4){
                    
                    $_SESSION["tabla"] [$fila] [$col]=0;
                    $_SESSION["tabla"] [$fila] [$col+1]=1;
               }else{
                     $_SESSION["tabla"][$fila][0]=1;
                    $_SESSION["tabla"][$fila][$col]=0;
                }
          } 
          
          if(isset($_POST["izquierda"])){
             for ($f=0; $f <=6 && !$encontrado  ; $f++) { 
                    for ($c=0; $c <=4 && !$encontrado; $c++) { 
                           if($_SESSION["tabla"][$f][$c]==1 ){
                            $fila=$f;
                            $col=$c;
                            $encontrado==true; 
                            
                            }
                     }
                }
                if(isset($col)&& $col>0){
                    
                    $_SESSION["tabla"] [$fila] [$col]=0;
                    $_SESSION["tabla"] [$fila] [$col-1]=1;
               }else{
                     $_SESSION["tabla"][$fila][4]=1;
                    $_SESSION["tabla"][$fila][$col]=0;
                }
          }
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



<div style="margin:20px">
    <form method="post" action="">
        <button type="submit" name="abajo" value="0" style="padding:30px;font-size: 50px; " > ⬇️ </button>
        <button type="submit" name="arriba" value="0" style="padding:30px;font-size: 50px; ">⬆️</button>
        <button type="submit" name="izquierda" value="2" style="padding:30px;font-size: 50px;  ">⬅️</button>
        <button type="submit" name="derecha" value="3" style="padding:30px;font-size: 50px;  ">➡️ </button>
        <button type="submit" name="reset" value="4" style="padding:30px;  ">RESET</button>
    </form>
</div>    




<table>
    <?php

    // $a=1;
    // $b=-1;
    // $c=1;
    // $d=-1;


   
    for ($f=0; $f <=6 ; $f++)  { 
        echo "<tr>";  // abre fila
        for ($c=0; $c <=4 ; $c++) { 
            if( ($_SESSION["tabla"][$f][$c]) == 0){
                echo '<td style="border: 2px solid black; background-color: white; padding:50px"></td>';  // celda blanca si es 0
                        }else{
                 echo '<td style=" border: 2px solid black; background-color: red; padding:50px"></td>';   // celda roja si distinto de 0
                        }
         }
        echo "</tr>";  // cierra fila
    }

   ?>
   </table>
</body>
</html>