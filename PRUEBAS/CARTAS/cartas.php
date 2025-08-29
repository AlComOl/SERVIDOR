<?php
session_start();


if(isset($_POST["juegoNuevo"])){
        $_SESSION["contador"]=0;
        setcookie(session_name(), '', time() - 3600, '/'); 
        session_destroy();
          
}

if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=0;
}
if(!isset($_SESSION["contador1"])){
      $_SESSION["contador1"]=0;
    
}
if(!isset($_SESSION["contador2"])){
    $_SESSION["contador2"]=0;
}


if (!isset($_SESSION["cartas"])) {
   
                $_SESSION["cartas"]=[];

                for ($i=0; $i < 3; $i++) { 
            
                array_push($_SESSION["cartas"], ["letra" => substr("cdpt", rand(0, 3), 1),"num"   => rand(1, 13)]);
             }
        }


        print_r($_SESSION["cartas"]);
        echo"<br>";
         echo"<br>";


    if(isset($_POST["carta1"])){
       if($_SESSION["contador"]<=2){
          $_SESSION["cartas"][0]= ["letra" => substr("cdpt", rand(0, 3), 1),"num"   => rand(1, 13)];
       

          $_SESSION["contador"] += 1;
       }else{
        echo"<br>";
        
        print_r("Ya ");
       }
    }
     echo"<br>";
    print_r($_SESSION["cartas"]);

    // print_r($_SESSION["contador"]);

     if(isset($_POST["carta2"])){
       if($_SESSION["contador1"]<=2){
          $_SESSION["cartas"][1]= ["letra" => substr("cdpt", rand(0, 3), 1),"num"   => rand(1, 13)];
          $_SESSION["contador1"] += 1;
       }else{
        print_r("Ya");
       }
    }
    print_r($_SESSION["contador1"]);

    if(isset($_POST["carta3"])){
       if($_SESSION["contador2"]<=2){
          $_SESSION["cartas"][2]= ["letra" => substr("cdpt", rand(0, 3), 1),"num"   => rand(1, 13)];
          $_SESSION["contador2"] += 1;
       }else{
        print_r("Ya ");
       }
    }
    print_r($_SESSION["contador2"]);
    

    
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

        if($_SESSION["contador"]>=2 || $_SESSION["contador1"]>=2 || $_SESSION["contador2"]>=2){
            $puntuacion=0;
            foreach ($_SESSION["cartas"] as $key => $value) {
                $puntuacion+=$value["num"];  
                print_r($value["num"].",");
            }
        //  echo"$puntuacion"; 
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
                <button style=" width:150px; heigth:10px; margin:30px 80px 20px 30px;" type="submit" name="juegoNuevo" value="">Nueva partida</button>
            </div>
    </form>

    <h1><?php $puntuacion ?></h1>
</body>
</html>