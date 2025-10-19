<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
$monthEarn=0;
$EarnArrayTotal[]=0;
$highestMonthlyProfit=0;
$maxKey[]=0;
echo "<table>";
echo"<th>Tiendas</th>";
echo"<th>Enero</th>";
echo"<th>Febrero</th>";
echo"<th>Marzo</th>";

foreach($tiendas as $mes => $ingreso){
 
    echo"<tr>";
 
          echo"<td>$mes</td>";
   
  
        foreach( $ingreso as $ingresos){
            $monthEarn += $ingresos;
            echo"<td>$ingresos</td>";
         
        }
         

        echo"$monthEarn<br>";
        $highestMonthlyProfit= array_push($EarnArrayTotal,$monthEarn);
        $monthEarn=0;
         
     echo"</tr>";
}
       $highestMonthlyProfit=max($EarnArrayTotal);
       $maxKey =array_search($highestMonthlyProfit,$EarnArrayTotal);



 


?>