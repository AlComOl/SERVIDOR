<?php
session_start();
// $_POST["juegoNuevo"]=[];
// $_POST["carta1"]=[];
// $_POST["carta2"]=[];
// $_POST["carta3"]=[];

if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=0;
}
if (!isset($_SESSION["cartas"])) {
    $_SESSION["cartas"]=[];

        for ($i=0; $i < 3; $i++) { 
    
        array_push($_SESSION["cartas"], ["letra" => substr("cdpt", rand(0, 3), 1),"num"   => rand(1, 13)]);
        }
}

    if(isset($_POST["carta1"])){
       if($_SESSION["contador"]<3){
          $_SESSION["cartas"][0]= ["letra" => substr("cdpt", rand(0, 3), 1),"num"   => rand(1, 13)];
          $_SESSION["contador"] += 1;
       }else{
        print_r("Ya has agotado las cartas");
       }
    }
    print_r($_SESSION["contador"]);
    

    if(isset($_POST["juegoNuevo"])){
        $_SESSION["contador"]=0;
       
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');   
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKERSTARS</title>
</head>
<body>
    <?php
        foreach ($_SESSION["cartas"] as $key => $value) {
             echo"<img style='width:160px; height:140px;'src ='./cartasImg/{$value['letra']}{$value['num']}.svg'>";
           
        }

    ?>
    <form method="post">
        <div>
            <button style=" width:60px; heigth:10px; margin:30px 80px 20px 30px;" type="submit" name="carta1" value="">Carta</button>
            <button style=" width:60px; heigth:10px; margin:30px 80px 20px 30px;" type="submit" name="carta2" value="">Carta</button>
            <button style=" width:60px; heigth:10px; margin:30px 80px 20px 30px;" type="submit" name="carta3" value="">Carta</button>
        </div>
            <div>
                <button style=" width:150px; heigth:10px; margin:30px 80px 20px 30px;" type="submit" name="" value="">Finalizar</button>
                <button style=" width:150px; heigth:10px; margin:30px 80px 20px 30px;" tyoe="submit" name="juegoNuevo" value="">Nueva partida</button>
            </div>
    </form>
</body>
</html>