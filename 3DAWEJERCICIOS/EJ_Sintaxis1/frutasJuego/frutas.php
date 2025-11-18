<?php
Session_start();
if(!isset($_SESSION['aciertos'])) $_SESSION['aciertos']=0;
if(!isset($_SESSION['fallos'])) $_SESSION['fallos']=0;
$contador=0;

$frutas=['manzana','pera','naranja','kiwi','sandia','melon','kaki'];

$frutaAleatoria=array_rand($frutas);


if(!isset($_SESSION['juegoFrutas'])) $_SESSION['juegoFrutas']=[null,null,null,null,null];


if(isset($_POST['eliminar'])){
    session_destroy();
}


if(isset($_POST['tirar'])){

    foreach ($_SESSION['juegoFrutas'] as $indice => $fruta) {

        if($fruta==null){

            $_SESSION['juegoFrutas'][$indice]=$frutas[$frutaAleatoria];
            $_SESSION['aciertos']++;
            break;

        }
        if($fruta===$frutas[$frutaAleatoria]){
            $_SESSION['fallos']++;
            break;    
        }

        }
    }

    foreach ($_SESSION['juegoFrutas'] as $key => $value) {
        $contador++;
        
            if($value!==null && $contador===5){
                echo"<h1 style='color:red;'>GAME OVER</h1>";
                $contador=0;
            }
    }

  

    print_r($_SESSION['juegoFrutas']);

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>
<body>
    <form method="post">
        <button name='tirar'>tirar</button><button name='eliminar'>eliminar</button>
    </form>

    <h1>Aciertos: <?php echo "{$_SESSION['aciertos']} "; ?> </h1>

    <h1>Fallos: <?php echo "{$_SESSION['fallos']} "; ?> </h1>
</body>
</html>