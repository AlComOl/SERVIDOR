<?php
session_start();

$_SESSION['id_tel']=$_POST['tel'];
$_SESSION['id_pan']=$_POST['pan'];
$_SESSION['id_rat']=$_POST['rat'];
$_SESSION['id_cpu']=$_POST['cpu'];



foreach($_SESSION as $key => $value){
    echo $_SESSION[$key] = $value;

}