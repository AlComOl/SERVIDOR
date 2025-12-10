<?php
session_start();
ob_start();

echo "<title>Ejercicio 3 Raul Carretero</title>";

$texto_familia =["t","p","d","c"];
$familias =  [  "Treboles" =>0,
                "Picas" =>0,
                "Diamantes" =>0,
                "Corazones" =>0
            ];

if( isset($_POST["lanzar"]) ){
    if($_POST["cantidad"] > 0){
        $num_cartas = $_POST["cantidad"];

        for ($i=0; $i < $num_cartas; $i++) { 

            $fam_rand = rand(0,3);
            $num_rand = rand(1,13);
            $carta_rand = $texto_familia[$fam_rand]."".$num_rand;
            
            $cont = 0;
            foreach ($familias as $familia => $cantidad) {

                if($cont == $fam_rand){
                    $familias[$familia]++;
                    $cont++;
                }
                else{
                    $cont++;
                }

            }

            echo "<img src='./img/".$carta_rand.".svg'>";
        }
        
        echo "<br>";
        foreach ($familias as $familia => $cantidad) {
            echo "$familia: $cantidad -";
        }
    }
    else {
        echo "<h1 style='color:red'>VALOR INVALIDO</h1>";

    }
}



echo "
<form action='' method='POST'> 
<br>
<input type='number' name='cantidad' min=0>
<input type='submit' name='lanzar' value='Enviar Consulta'>
</form>
";
?>

<style>
img{
    height: 100px;
    width: 100px;
}
</style>
