<?php
session_start();

if(!isset($_SESSION['productos'])){
        $_SESSION['productos']=[];
}

if(isset($_POST['eliminar'])){

}

if(isset($_POST['borrar'])){

    session_destroy();
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
            <button type="submit" >Agregar</button ><button type="submit" name="borrar" >Borrar</button>
        </form>
    </div>

    <div>
        <h3><strong>Carrito</strong></h3>
        <?php 
        
        
        if(isset($_SESSION['productos'])){

                    foreach ($_SESSION['productos'] as $key => $value) {

                       echo"<h3>Producto: {$value['nombre']} con una cantidad de : {$value['cantidad']} <form method='post'> <button style=' height: 30px; width: 50px;' name='eliminar' value='$key'>Eliminar</button> </form> <h3>";
                    }
            if(isset($_POST['eliminar'])){
             

                unset($_SESSION['productos'] [$_POST['eliminar']]);
            }
               

            }else{
                 echo"El carrito esta vacio";} ?>
    </div>


    
    
</body>
</html>