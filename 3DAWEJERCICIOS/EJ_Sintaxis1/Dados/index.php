<?php
session_start();
$aciertos=0;
$fallos=0;

  if(!isset($_SESSION['lanzado'])){
        $dado=0;
    }


if(!isset($_SESSION['tiradas'])){

      $_SESSION['tiradas']=[0];

    if(!isset($_SESSION['dados'])){
        $_SESSION['dados']=[0];
    }
 
    $_SESSION['dadosTirados']=[];
   

}else{

    if(isset($_POST['borrar'])){
    
        session_destroy();
    }

    if(isset($_POST['lanzar'])){

      $_SESSION['tiradas'][]++;

      $dado=rand(0,6);
     
      array_push($_SESSION['dadosTirados'],$dado);

      foreach ($_SESSION['dadosTirados'] as $value) {

        if($value===$dado){
            $aciertos++;
        }else{
            $fallos++;
        }
      }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<style>
    img{
        width: 50px;
        height: 50px;
    }
</style>
<body>

<h3>El dado lanzado es :</h3>
<?php
echo"<img  src='./dados/dado{$dado}.png'>";
?>
<h3>MOSTRAMOS LOS DADOS:</h3>
<?php
foreach ($_SESSION['dadosTirados'] as $value) {

    echo"<img  src='./dados/dado{$value}.png'>";
}

print_r($_SESSION['dados']);
?>
<h3>ACIERTOS</h3>
<?php
echo"<h3>$aciertos</h3>";
?>
<h3>FALLOS</h3>
<?php
echo"<h3>$fallos</h3>";
?>
<form method="post">
    <button name="lanzar">lanzar</button>
    <button name="borrar">borrar</button>
</form>
</body>
</html>
