


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Compra</title>
</head>
<body>
<h3>CARRITO DE LA COMPRA |</h3>
    <form method="post">
        Producto:<input type="text" name="producto" id="">
        Cantidad:<input type="number" id="quantity" name="quantity" min="1" max="15">
        <button type="submit" name="Anadir">Añadir</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    
    
<?php


if(isset($_POST['Anadir'])){

   
        $producto=$_POST['producto'];
        $quantity=$_POST['quantity'];

    if(isset( $_SESSION["cesta"])){

        //comprobar si existe el producto y añadorlo de otra manera para no machacar el array

            $_SESSION['cesta'][$producto]

        // $_SESSION["cesta"][$producto]=$quantity;

        print_r($_SESSION['cesta']);

    }else{

        $_SESSION["cesta"][$producto]=$quantity;

    }
        // foreach($productosArray as $key => $value){
        //     if($key['producto']===$producto){
        //         $value+=$quantity;
        //     }
        }




            // $productosArray['producto']=$producto;

            // $productosArray['quantity']=$quantity;



        // print_r($productosArray);

        else{
            // $productosArray=[];

            //     $producto=$_POST['producto'];
            //     $quantity=$_POST['quantity'];


            //     $productosArray['producto']=$producto;

            //         $productosArray['quantity']=$quantity;


                
        }




        
    ?>
    
</body>
</html>