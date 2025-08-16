<?php
session_start(); 
if(!isset($_SESSION["combinacion"])){
   
    for ($i=0; $i < 5; $i++) { 
    $_SESSION["combinacion"][$i]=(rand(1,15));
   }
   $_SESSION["premios"]=[0,1000,2000,3000,4000,5000];
   $_SESSION["premio"]=0;
   $_SESSION["tirada"]=0;
//    $_POST["cancelar"]=0;
 
}else{
       
    if(isset($_POST["boton"])){
        
     
        for ($d=0; $d < 5; $d++) { 
            
            if($_SESSION["combinacion"][$d]==$_POST["boton"]){
                $_SESSION["premio"]+=1;
                
            }else{
                echo"FALLO";
            }
        }  
       $_SESSION["tirada"]+=1;
    }
     $premio=$_SESSION["premio"];

      if(isset($_POST["cancelar"])){
        session_destroy();
       
    }
}

    //para terminar el proceso
    if(($_SESSION["tirada"])>4){
            ?>
            <body>
        <div >
            <h1 style="color:res";>PREMIO <?php print_r($_SESSION["premios"][$premio]) ?></h1>
            
        </div>
       
    <?php
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primitiva</title>
</head>
<body>
    <div style="display:flex;justify-content:center;aling-items:center;">
        <img src="./img/laPrimitiva.png" style="width:10%;height: 10%;">
    </div>
    <div  style="display:flex;justify-content:center;aling-items:center;">
        <h3>Números Premiados:</h3>
        <h2 style=" margin-left:10px; color:red;">
            <?php
                for ($o=0; $o < 5; $o++) { 
                print_r( $_SESSION["combinacion"] [$o] . " ");
                }
            ?>
        </h2>
    </div>
    <div style="display:flex;justify-content:center;aling-items:center;">
        <h1 style="color:blue";>PREMIOS ACUMILADOS:</h1>
         <h2 style="color:red"><?php print_r($_SESSION["premios"][$premio]) ?> </h2>
    </div>
    <div style="display:flex;justify-content:center;aling-items:left;">
        <h1 style="color:blue";>Tiradas:</h1>
        <h2><?php print_r($_SESSION["tirada"])?></h2>
    </div>

    <div style="display:flex;justify-content:center;aling-items:center;">
        <form method="post">
            <table>
                <?php
                $cont=0;
                    for ($p=0; $p < 4; $p++) { 
                        echo"<tr>";
                        for ($a=0; $a < 4; $a++) { 
                            echo"<td><button name='boton' value='$cont' style= 'padding: 10px 40px; border:1px solid black';>$cont</button></td>";
                            $cont++;
                        }
                        echo"</tr>";
                        echo"<br>";
                    }
                ?>
            </table>
        </form>
    </div>
    <div style="display:flex;justify-content:center;aling-items:center;">
        <form method="post">
            <button style="background-color:red; padding:10px 40px;"  name="cancelar" value="">Cancelar</button>
        </form>
    </div>
</body>
</html>

