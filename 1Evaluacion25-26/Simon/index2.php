<?php
session_start();
$aleatorio="";
$colores=['red','blue','yellow','green'];



if(!isset($_SESSION['aciertos'])) $_SESSION['aciertos']=0;

if(!isset($_SESSION['fallos'])) $_SESSION['fallos']=0;

if(isset($_POST['borrar'])){
    session_destroy();
}



if(!isset($_SESSION['aleatorio'])){

   $aleatorio= $colores[array_rand($colores)];
   
   $_SESSION['aleatorio']=$aleatorio;

   $aleatorio=$_SESSION['aleatorio'];



}






    if(isset($_POST['rojo'])){
        
            if($_POST['rojo']===$_SESSION['aleatorio']){
               $_SESSION['aciertos']++; 
            }else{
               $_SESSION['fallos']++;   
            }
            $_SESSION['aleatorio'] = $colores[array_rand($colores)];
    }

    if(isset($_POST['verde'])){
            if($_POST['verde']===$_SESSION['aleatorio']){
               $_SESSION['aciertos']++; 
            }else{
               $_SESSION['fallos']++;   
            }
            $_SESSION['aleatorio'] = $colores[array_rand($colores)];
    }

    if(isset($_POST['azul'])){
            if($_POST['azul']===$_SESSION['aleatorio']){
               $_SESSION['aciertos']++; 
            }else{
               $_SESSION['fallos']++;   
            }
            $_SESSION['aleatorio'] = $colores[array_rand($colores)];
    }

    if(isset($_POST['amarillo'])){
            if($_POST['amarillo']===$_SESSION['aleatorio']){
               $_SESSION['aciertos']++; 
            }else{
               $_SESSION['fallos']++;   
            }
            $_SESSION['aleatorio'] = $colores[array_rand($colores)];
    }

   



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon 2</title>
</head>
<style>
    button{
         height: 50px; width: 100px;
    }


</style>
<body>

<h3>Color Aleatorio</h3>


 <div style='height: 80px; width: 100px; background-color:<?php echo $_SESSION['aleatorio'] ?>'> </div>

 <br><br>


<form method="post">
    <button  style='background-color:red; height: 100px; width: 100px;' name="rojo" value="red"></button><button  style='background-color:blue; height: 100px; width: 100px;' name="azul" value="blue"></button><button style='background-color:green; height: 100px; width: 100px;' name="verde" value="green"></button><button  style='background-color:yellow; height: 100px; width: 100px;'name="amarillo" value="yellow"></button>
<br>

<button style=' height: 50px; width: 100px;' name='borrar'>Nueva paratida</button>
</form>
<h3>Aciertos:</h3>
<?php print_r($_SESSION['aciertos']); ?>
<h3>Fallos:</h3>
<?php print_r($_SESSION['fallos']); ?>
</body>
</html>