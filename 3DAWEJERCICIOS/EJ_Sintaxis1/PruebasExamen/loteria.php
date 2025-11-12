<?php
session_start();
// $_SESSION['premios']=[1000,2000,3000,4000,5000];
// $acumulados=$_SESSION['premios'];

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
              $_SESSION['premios'] = [0,0,0,0,0];
        }


        foreach ($_SESSION['premiados'] as $numeros) {
            if($numeros==$_POST['numeros']){
           
                $_SESSION['premios'][0]+=1000;
            }
        }
 

}

    
    $Premiados=implode(",",$_SESSION['premiados']);   


}


 $premiosAcumulados=$_SESSION['premios'][0];



echo" <div class='container'>";
echo" <img src='./Primitiva.jpg'>";
echo" </div>";

echo"Numeros Premiados";
echo $Premiados ;
echo"<h4 style='color blue'>PREMIOS ACUMULADOS: </h4>";
 echo"$premiosAcumulados";
 print_r($_SESSION['premios']);
echo"<h4 style='color blue'>TIRADAS: </h4>";

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
echo"<form method='post'><button>Cancelar</button></form>";

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