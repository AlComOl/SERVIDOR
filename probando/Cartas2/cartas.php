<?php
session_start();

$value1=0;
        $value2=0;
        $value3=0;
        $resultado=0;

if(!isset($_SESSION['partida'])){

     $_SESSION['partida']=[];

        $cartas1=rand(1,13);
        $_SESSION['cont1']=0;
    
        $_SESSION['carta1']=$cartas1;



   
        $cartas2=rand(1,13);
        $_SESSION['cont2']=0;
        $_SESSION['carta2']=$cartas2;

    

 
        $cartas3=rand(1,13);
        $_SESSION['cont3']=0;
        $_SESSION['carta3']=$cartas3;


 
 

    

}

    if(isset($_POST['c1'])){

        $_SESSION['cont1']++;
        if($_SESSION['cont1']<=3){
        $cartas1=rand(1,13);
        echo $_SESSION['cont1'];
         $_SESSION['carta1']=$cartas1;
        }else{
            echo"Solo se puede tirar 3 veces";
        }
    
       

    } 

     if(isset($_POST['c2'])){
         $_SESSION['cont2']++;
        if($_SESSION['cont2']<=3){
        $cartas1=rand(1,13);
        echo $_SESSION['cont2'];
         $_SESSION['carta2']=$cartas1;
        }else{
            echo"Solo se puede tirar 3 veces";
        }
    } 

     if(isset($_POST['c3'])){
      $_SESSION['cont3']++;
        if($_SESSION['cont3']<=3){
        $cartas1=rand(1,13);
        echo $_SESSION['cont3'];
         $_SESSION['carta3']=$cartas1;
        }else{
            echo"Solo se puede tirar 3 veces";
        }

    } 

    if(isset($_POST['nueva'])){
    session_destroy();

    }

    if(isset($_POST['finalizar'])){
        $value1=$_SESSION['carta1'];
        $value2=$_SESSION['carta2'];
        $value3=$_SESSION['carta3'];
        $resultado=$value1+$value2+$value3;

        echo"<h1 style='color:red'>El resultado es $resultado</h1>";

    }


    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
</head>
<style>
    img{
        height: 100px;
        width: 100px;
    }
    .b{
        margin:100px;
    }
    button{
        margin:10px;
    }
</style>
<body>

<form  method="post">
      <?php echo "<img src='./cartas/t{$_SESSION['carta1']}.svg'>";?>
    <button name="c1" value="">carta1</button>
      <?php echo "<img src='./cartas/t{$_SESSION['carta2']}.svg'>";?>
    <button name="c2" value="">carta2</button>
      <?php echo "<img src='./cartas/t{$_SESSION['carta3']}.svg'>";?>
    <button name="c3" value="">carta3</button>
<div class='b'>
    <button name="finalizar" value="">finalizar</button>
    <button name="nueva" value="">Nueva Partida</button>
</div>
</form>


    
</body>
</html>