<?php
session_start();

$left=0;
$top=0;
   


if(!isset($_SESSION["pelotas"])){
     $_SESSION["pelotas"] = []; 
    
}else{

            if(isset($_POST["AI"])){
         
                  array_push($_SESSION["pelotas"],["left"=>$left=rand(10,150),"top"=>$top=rand(10,150)]);
            
            }

            if(isset($_POST["AD"])){
               
                  array_push($_SESSION["pelotas"],["left"=>$left=rand(250,400),"top"=>$top=rand(10,150)]);
        
            }
            if(isset($_POST["BI"])){
           
                  array_push($_SESSION["pelotas"],["left"=>$left=rand(10,150),"top"=>$top=rand(200,450)]);

            }
            if(isset($_POST["BD"])){
           
                  array_push($_SESSION["pelotas"],["left"=>$left=rand(250,400),"top"=>$top=rand(200,450)]);
            }

                
            }

     if(isset($_POST["reset"])){
            session_destroy(); // borra datos del servidor
            
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
          /*  top: <?= $top ?>px;
            left: <?= $left ?>px;*/
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
        <?php
        
            foreach ($_SESSION["pelotas"] as $key => $value) {
               $left=$value["left"];
               $top=$value ["top"];
                echo "<div class='rojo' style='top: {$top}px; left: {$left}px;'></div>";

            }
        ?>
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