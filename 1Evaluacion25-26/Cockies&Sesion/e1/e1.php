<?php
if(!isset($_POST['contador'])){
   $visitas=0;
}else{
    $visitas=$_POST['contador'];
    
}
    
$visitas++;
setcookie("visitas", $visitas, time() + 3600*24*30);
echo"<h3>Visitas: " . $visitas . " </h3>";



            if(isset($_COOKIE['Alvaro'])){
                 echo"<div style='background-color:blue'>Bienvenido</h1></div>";
              
                
                }else{ 
            //    setcookie("Alvaro", 1, time() + 10);  
               echo"<div style='background-color:yellow'>Welcome primer ejercicio de Cockies</h1></div>"; 

            }
            
            if(isset($_POST['eliminar'])){
                unset($_COOKIE['Alvaro']);
            }


         
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='' method='post'> <button type='submit' value='eliminar' name='eliminar'> Eliminar</button> </form>
</body>
</html>
