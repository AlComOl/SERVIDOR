<?php
session_start();

if(!isset($_SESSION['monedas'])){
    $_SESSION['monedas'] = 4;
}

if(isset($_POST['meter'])){
    $_SESSION['monedas']++;
}

$frutas = [];
$ganaste = false;

if(isset($_POST['jugar'])){
    if($_SESSION['monedas'] > 0){
        $_SESSION['monedas']--;
        for($i=0; $i<3; $i++){
            $frutas[] = rand(1,7);
        }

       
        $primera = $frutas[0];
        $todasIguales = true;
        foreach($frutas as $fruta){
            if($fruta != $primera){
                $todasIguales = false;
            }
        }

        if($todasIguales){
            $ganaste = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tragaperras</title>
    <style>
        img{
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
    <h2>Monedas: <?php echo $_SESSION['monedas']; ?></h2>

    <form method="post">
        <button type="submit" name="meter">Meter moneda</button>
        <button type="submit" name="jugar">Jugar</button>
    </form>

    <div>
        <?php
        foreach($frutas as $f){
            echo "<img src='fotos/".$f.".svg'>";
        }
        ?>
    </div>

    <?php
    if($ganaste){
        echo "<h2>¡Ganaste!</h2>";
    }
    ?>
</body>
</html>
