<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas</title>
</head>
<style>
    table{  
        width: 250px;
        height: 250px;

    }

    tr,td,th{
        text-align:center;
    }
</style>
<body>
    
</body>
</html>

<?php
$tiendas=array(array("Enero"=>1200,"Marzo"=>200,"Abril"=>4000),
          array("Enero"=>600,"Marzo"=>300,"Abril"=>700),
          array("Enero"=>900,"Marzo"=>1200,"Abril"=>5000)
        
        );



$tiendas1 = [

    [
        "Enero"=>1200,
        "Marzo"=>200,
        "Abril"=>4000
    ],
    [
        "Enero"=>600,
        "Marzo"=>300,
        "Abril"=>700
    ],
    [
        "Enero"=>900,
        "Marzo"=>1200,
        "Abril"=>5000
    ],
];
$myArray[]=0;
$newArray[]=0;
$totalMes=0;
$maxMes=0;
$indexStrong=0;
$count=0;

foreach ($tiendas as $clave => $precio) {
    foreach ($precio as $precios) {
         $totalMes+=$precios; 
    }
      $newArray=array_push($myArray,$totalMes);     
        $totalMes=0;
}
$maxMes=max($myArray);
$indexStrong=array_search($maxMes,$myArray);

echo"$maxMes <br>";
echo"$indexStrong <br>";

echo"<table>";
echo"<th>Tienda</th>";
echo"<th>Enero</th>";
echo"<th>Febrero</th>";
echo"<th>Marzo</th>";
    foreach ($tiendas as $clave => $precio) {
        echo"<tr>";
        echo"<td>$clave</td>";

        $count++;
        echo"$count";
       
        foreach($precio as $precios){
        
                if($indexStrong===$count){
                    echo"<td><strong>$precios</strong></td>";
                }else{
                    echo"<td>$precios</td>";  
                }   
        }
    }
echo"<tr>";
echo"</table>";
?>