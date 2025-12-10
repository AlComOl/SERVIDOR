<?php
session_start();




if(isset($_POST['añadir'])){

    $producto=$_POST['producto'];
    $cantidad=$_POST['cantidad'];

    if(!isset($_SESSION['cesta'])){

        $_SESSION['cesta'][$producto]=$cantidad;

      

    }else{

                if(isset($_SESSION['cesta'][$producto])){

                    $_SESSION['cesta'][$producto]+=$cantidad;

                }else{

                     $_SESSION['cesta'][$producto]=$cantidad; 

                }
            }

        }       


          if(isset($_POST['eliminar'])){

            $indice=$_POST['eliminar'];
            
            unset($_SESSION['cesta'][$indice]);
          }

          if(isset($_POST['reset'])){
            $indice=$_POST['reset'];
            session_destroy();
          }

          if(isset($_SESSION['cesta'])){
    
                foreach ($_SESSION['cesta'] as $key => $value) {
                    echo"<form method='post'><h4>producto:$key cantidad:$value</h4><button name='eliminar' value='$key'>Eliminar</button></form>";            
          }

        }

        



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito2</title>
</head>
<body>
    <div><h2>Carrito de la Compra</h2></div>
    <div>
        <form action="" method="post">
            <label for="">Producto:</label>
            <input type="text"  name="producto"> 
            <label for="">Cantidad:</label>
            <input type="text"  name="cantidad">
            <button type="submit" name="añadir" class="btn btn-primary">Añadir</button>
            <button type="submit" name="reset" class="btn btn-primary">Reset</button>
       </form>
    </div>

      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
</body>
</html>