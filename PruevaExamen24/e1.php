
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
if(isset($_SESSION['borrar'])){
    session_destroy();
    header("Location: e1.php");
    exit;
}

if(!isset($_SESSION["genera"])){
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

        echo '<button type="submit" name="boton" value="0" id="b" style="background-color:'.$c.';width:30px;height:30px;"></button>';
        
    }

   if(isset($_POST["boton"])){

    $botonPresionado=$_POST["boton"];

   
print_r($botonPresionado);



    $color=rand(1,4);
    switch ($color) {
        case 1:
            echo "<div style='background-color:red;width:30px;height:30px;'></div>";
            $_SESSION["BotonAleatorio"]="red";
        break;
        case 2:
            echo "<div style='background-color:blue;width:30px;height:30px;'></div>";
            $_SESSION["BotonAleatorio"]="blue";
            break;
        case 3:
            echo "<div style='background-color:green;width:30px;height:30px;'></div>";
            $_SESSION["BotonAleatorio"]="green";
            break;        
        case 4:
            echo "<div style='backgroundcolor:yellow;width:30px;height:30px;'></div>";
            $_SESSION["BotonAleatorio"]="yellow";
            break;
       
        default:
          
            break;
        }

    }
    }

    ?>
    </form> 
    </body>
</html>

