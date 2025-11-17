<?php
session_start();

if(!isset($_SESSION['productos'])){
        $_SESSION['productos']=[];
        }

if(isset($_POST['nombre']) && isset($_POST['cantidad'])){

   $nombre = $_POST['nombre'];
   $cantidad = $_POST['cantidad'];

     

    if(isset($_SESSION['productos'])){
                    
        array_push($_SESSION['productos'],['nombre'=> $nombre ,'cantidad'=> $cantidad]);

        
            
    }
   

}else{
    echo"Introduce producto y cantidad";
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarritoNew</title>
</head>
<style>
    button{
        height: 70px;
        width: 90px;
        margin:20px;
    }
    input{
        margin:20px;
    }
    h2{
        margin:10px;
    }
    
</style>

<body>
    <h1>CARRTO</h1>

    <div>
        <form  method="post">
            <h2>Nombre del Producto:</h2><input type="text" name="nombre" value="">
            <h2>Cantidad:</h2><input type="number" name="cantidad" value="">
            <button type="submit">Agregar</button ><button type="submit" >Borrar</button>
        </form>
    </div>

    <div>
        <h3><strong>Carrito</strong></h3>
        <?php if(isset($_SESSION['productos'])){ echo print_r($_SESSION['productos']); }else{ echo"El carrito esta vacio";} ?>
    </div>


    
    
</body>
</html>