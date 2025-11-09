<?php
$productosArray=[];
$producto=$_POST['producto'];
$quantity=$_POST['quantity'];





   
    $productosArray['producto']=$producto;

    $productosArray['quantity']=$quantity;



print_r($productosArray);