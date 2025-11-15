<?php
session_start();
// $_SESSION['premios']=[1000,2000,3000,4000,5000];
// $acumulados=$_SESSION['premios'];
$tiradas=0;


if(!isset($_SESSION['premiados'])){

    $_SESSION['premiados']=[];

    $myNumeros=[1,2,3,4,5,6,8,9,10,11,12,13,14,15];


    for ($x=0; $x < 5; $x++) { 
        $n=rand(1,15);
        $_SESSION['premiados'][$x]=$n;
   
     }

    

}else{
    
     if(isset($_POST['numeros'])){

          if(!isset($_SESSION['premios'][0])) {
              $_SESSION['premios'] = [0];
        }


        foreach ($_SESSION['premiados'] as $numeros) {
            if($numeros==$_POST['numeros']){

                echo"paso por ahi";
           
                $_SESSION['premios'][0]+=1000;

                print_r( $_SESSION['premios'][0]);
            }
        }
 

    }

    
    $Premiados=implode(",",$_SESSION['premiados']);   


}


if(isset($_POST['cancelar'])){
    session_destroy();
    
}


if(!isset($premiosAcumulados)){

    $premiosAcumulados=0;
}

if(!isset($_SESSION['contador'])){
    $_SESSION['contador']=0;
}



if(isset($_POST['numeros'])){

      $_SESSION['contador']++;

      $tiradas=$_SESSION['contador'];

}

if(!isset($_SESSION['premios'])){
 $premiosAcumulados=0;

}else{
   $premiosAcumulados=$_SESSION['premios'][0];
}

if($_SESSION['contador']===5){
    echo"<h1 style='color:red';>El juego ha terminado </h1>";
    echo"<h2>PREMIO $premiosAcumulados EUROS</h2>";
}

if(!isset($_SESSION['premiados'])){
    $Premiados=0;
}



 



echo" <div class='container'>";
echo" <img src='./Primitiva.jpg'>";
echo" </div>";

echo"<h4>Numeros Premiados:  $Premiados </h4>";

echo"<h4 style='color:red'>PREMIOS ACUMULADOS: $premiosAcumulados</h4>";

echo"<h4 style='color:blue'>TIRADAS: $tiradas </h4>";

$numeros=0;
  echo"<table>";
for ($i=0; $i <= 4; $i++) { 
    echo"<tr>";
    for ($z=0; $z < 4; $z++) { 
        echo"<td><form method='post'><button name='numeros' value='$numeros'>$numeros</button></form></td>";
        $numeros++;
    }
     echo"<td>";
}
echo"</table>";
echo"<form method='post'><button name='cancelar'>Cancelar</button></form>";

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <style>
        img{
            width: 500px;
            height: 200px;
        }

        td,tr{

        }
    </style>
</head>
<body>
   
</body>
</html>