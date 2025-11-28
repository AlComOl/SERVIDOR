<?php
session_start();

if(isset($_POST['Anadir'])){

   
        $producto=$_POST['producto'];
        $quantity=$_POST['quantity'];


        if(!isset($_SESSION['cesta'])){

            $_SESSION["cesta"][$producto]=$quantity;

        }else{

            if(isset($_SESSION['cesta'][$producto])){

                  $_SESSION['cesta'][$producto]+=$quantity;

            }else{

                  $_SESSION["cesta"][$producto]=$quantity;

            }
        }

    }

     if(isset($_POST['borrar'])){

        $index=$_POST['borrar'];

        unset($_SESSION['cesta'][$index]);
     }

      if(isset($_POST['reset'])){
        $index=$_POST['reset'];
        session_destroy();
       
        
     }

     if(isset($_SESSION['cesta'])){

            foreach ($_SESSION['cesta'] as $key => $value) {

                echo"<form method='post'><h3> $key y cantidad $value </h3><button type='submit' name='borrar' value='$key'> Eliminar </button></form>";
            }

             print_r($_SESSION["cesta"]);
    }
      
   



   


        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Compra</title>
</head>
<body>
<h3>CARRITO DE LA COMPRA</h3>
    <form method="post">
        Producto:<input type="text" name="producto" id="">
        Cantidad:<input type="number" id="quantity" name="quantity" min="1" max="15">
        <button type="submit" name="Anadir">Añadir</button>
        <button type="submit" name="reset">Reset</button>
    </form>

        
</body>
</html>

    
    
<?php
