<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post">

<?php
// $_SESSION['fallos']=0;
// $_SESSION['aciertos']=0;


if (!isset($_SESSION['fallos'])) {
    $_SESSION['fallos'] = 0;
}

if (!isset($_SESSION['aciertos'])) {
    $_SESSION['aciertos'] = 0;
}

//Random de un color
 $color=rand(1,4);
 switch ($color) {
     case 1:
       
         $_SESSION["ColorSelecionado"]="red";
     break;
     case 2:
        
         $_SESSION["ColorSelecionado"]="blue";
         break;
     case 3:
        
         $_SESSION["ColorSelecionado"]="green";
         break;        
     case 4:
       
         $_SESSION["ColorSelecionado"]="yellow";
         break;
    
     default:
       
         break;
     }


//Pintar colores para selecionar
    for ($i=0; $i <= 3 ; $i++) { 
        switch ($i) {
            case '0':
            $c="red";
                break;
            case '1':
            $c="yellow";
                break;
            case '2':
            $c="green";
            break;
            case '3':
            $c="blue";
            break;
        
        default:
            # code...
            break;
     }
 //pinta los colores
        echo '<button type="submit" name="boton" value="0" id="b" style="background-color:'.$c.';width:30px;height:30px;"></button>';

    }

//si apretamos el color generado que guardamos en Sesion aparece el color generado 
        if(isset($_POST["boton"])){   
            echo"<h1>COLOR ALEATORIO:</h1><br>";

  echo "<div style='background-color:".$_SESSION['ColorSelecionado'].";width:30px;height:30px;'></div>";

             
             if($_SESSION['ColorSelecionado']===$c){

                print_r($_SESSION['ColorSelecionado']);
                print_r($c);
             
               $_SESSION['aciertos']++;
               echo"acierto";
             
             }else{
        
                $_SESSION['fallos']++;
            
                echo"fallo";
               
             }

          
             echo"<h1>Aciertos:</h1><br>";
             echo"<h1>" .$_SESSION['aciertos']."</h1>";

             echo"<h1>Fallos:</h1><br>";
             echo"<h1>" .$_SESSION['fallos']."</h1>";
     }

     echo"<button ></button>"
    ?>
    </form> 
    </body>
</html>

