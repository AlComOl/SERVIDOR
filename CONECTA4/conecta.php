<?php
session_start();

$jugador1=1;
$jugador2=2;


if(isset($_POST['borrar'])){
    $_SESSION=[];
}

//CREAR EL ARRAY SI NO EXISTE
if(!isset($_SESSION["tabla"])){//si no existe inicializamos el array
    for($i=0;$i<6;$i++){//cada vez que iteramos metemos los 7 ceros
        $_SESSION["tabla"][]=[0,0,0,0,0,0,0];
      
        
    }
    $_SESSION["turno"] = rand(1, 2);
   
    print_r($_SESSION["turno"]);
}



//PULSAR BOTON INTRODUCE FICHA
if(isset($_POST["boton"])){//si le dam0os al boton
    $j=0;
    $columna=$_POST["boton"];//metemos el value de la variable en $columna
 
    $encontrado=false;





    while($j < 6 && !$encontrado){

    
    if($_SESSION["tabla"][$j][$columna]===0){
//asignar turno

        if(isset($_SESSION["turno"])){//si existe la variable turno 
            if($_SESSION["turno"]==1){//si es 1
            $_SESSION["tabla"][$j][$columna]=$jugador1; 
            $_SESSION["turno"]=2;//cambio al 2

            }else if($_SESSION["turno"]==2){  //si es 2 
            $_SESSION["tabla"][$j][$columna]=$jugador2;
            $_SESSION["turno"]=1;//cambio al 2 
           
            }
         
        }else{
            $_SESSION["tabla"][$j][$columna]=$jugador1;
           
        }


       

       $encontrado=true;
    }
    $j++;
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>CONECTA 4</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- Generar las filas de la tabla pintando la celda del color del jugador que corresponde-->
<form action="" method="post">
    <table>
        <?php
       for ($x=5; $x >= 0 ; $x--) { 
        echo "<tr>";
         for ($z=0; $z <= 6 ; $z++) { 
                if(isset($_SESSION["tabla"][$x][$z])){
                    $celda = $_SESSION['tabla'][$x][$z];
                    if($celda==1){//pintar celda segun jugador
                        echo"<td style='background-color: red;'></td>";
                    
                    }else if($celda==2){//pintar celda segun jugador
                        echo "<td style='background-color: yellow;'></td>";
                    }else{
                        echo "<td></td>";
                    }
                }else{
                    echo "<td></td>"; // Si el índice no está definido 
                  

                }
            
            }
            echo "</tr>";
        }
       
   
        ?>
    </table>

<div class="botones">
    <button type="submit" name="boton" value="0" <?php if ($_SESSION['tabla'][5][0] != 0) echo "disabled"; ?>> + </button>
    <button type="submit" name="boton" value="1" <?php if ($_SESSION['tabla'][5][1] != 0) echo "disabled"; ?>> + </button>
    <button type="submit" name="boton" value="2" <?php if ($_SESSION['tabla'][5][2] != 0) echo "disabled"; ?>> + </button>
    <button type="submit" name="boton" value="3" <?php if ($_SESSION['tabla'][5][3] != 0) echo "disabled"; ?>> + </button>
    <button type="submit" name="boton" value="4" <?php if ($_SESSION['tabla'][5][4] != 0) echo "disabled"; ?>> + </button>
    <button type="submit" name="boton" value="5" <?php if ($_SESSION['tabla'][5][5] != 0) echo "disabled"; ?>> + </button>
    <button type="submit" name="boton" value="6" <?php if ($_SESSION['tabla'][5][6] != 0) echo "disabled"; ?>> + </button>
</div>
    </div>
</form>


<form action="" method='post'>
    <input type="submit" name="borrar" value="borrar">
</form>

</body>
</html> 
    