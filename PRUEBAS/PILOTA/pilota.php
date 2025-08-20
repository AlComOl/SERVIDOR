<?php
session_start();
$_SESSION["partida"]=0;
$_myArray[][]=[[0,0],[0,0]];
$left=0;
$top=0;
//aun falta que se pinten todos las pelotas

if(!isset($_SESSION["pelotas"])){
    $_SESSION["pelotas"] =["left"=>$left , "top"=>$top];
}else{
            if(isset($_POST["AI"])){
                $_myArray = [[1,0],[0,0]];
                  $left=rand(10,150);
                  $top=rand(10,150);
                  
            
                  array_push($_SESSION["pelotas"],["left"=>$left,"top"=>$top]);
                  print_r($_SESSION["pelotas"]);

                echo"<table>"; 
                    for ($i=0; $i < 2 ; $i++) {
                    
                            for ($s=0; $s < 2; $s++) { 
                                
                                if(($_myArray[$i][$s])==1){ 
                                echo"<div class='rojo'></div>";
                                
                                } 
                                if(($_myArray[$i][$s])==0){
                                
                                }
                            
                            } 
                            
                        }
                
                echo "</table>";
            }

if(isset($_POST["AD"])){


}
if(isset($_POST["BI"])){

}
if(isset($_POST["BD"])){

}

if(isset($_POST["reset"])){
       session_destroy(); // borra datos del servidor
    
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        td {
        border: 1px solid black;
        height: 200px;
        width: 200px;
        }

        .rojo{
            width: 10px;
            height:10px;
            background-color:red;
            position:absolute;
            border-radius:50%;
            top: <?= $top ?>px;
            left: <?= $left ?>px;
        }
        table{
            border:1px solid black;
             height: 400px;
             width: 400px; 
             position:relative;

        }
       
        tr{
             border: 1px solid black;
             height: 200px;
             width: 200px; 
        }
    </style>
<body>
<table>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>



    <div style="padding:50px 0px  0px 248px">
        <form method="post">
            <button type="submit"  name="AI" value="" style=" padding:20px 40px margin:10px; background-color:grey" >AI</button>
            <button type="submit" name="AD" value="" style=" padding:20px 40px margin:10px; background-color:grey" >AD</button>
            <button type="submit" name="BI" value="" style=" padding:20px 40px margin:10px; background-color:grey" >BI</button>
            <button type="submit" name="BD" value="" style=" padding:20px 40px margin:10px; background-color:grey" >BD</button>
            <button type="submit" name="reset" value="" style=" padding:20px 40px margin:10px; background-color:red" >RESET</button>

        </form>
    </div>
</body>
</html>