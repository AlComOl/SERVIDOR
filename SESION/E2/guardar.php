<?php
session_start();

if (isset($_SESSION['productos'])){//Si existe el array productos en la var de session introduce los valores dentro del array
    $productos['producto']=$_POST['producto'];
    $productos['precio']=$_POST['precio'];
    $productos['cantidad']=$_POST['cantidad'];


//aqui introcuce los valores del array en la variable de session
    $_SESSION['productos'][]=$productos;



}else{//en caso contrario crea el array y lo introcuce dentro de la variable session 
    $_SESSION['productos']=[];//crea el array vacio
//añade al array los valores
    $productos['producto']=$_POST['producto'];
    $productos['precio']=$_POST['precio'];
    $productos['cantidad']=$_POST['cantidad'];
//añade a la sesion el primer producto
    $_SESSION['productos'][]=$productos;

}


foreach ($_SESSION['productos'] as $key => $value) {
    echo "$key => Producto: {$value['producto']}, Precio: {$value['precio']}, Cantidad: {$value['cantidad']}<br>";
}

?>
