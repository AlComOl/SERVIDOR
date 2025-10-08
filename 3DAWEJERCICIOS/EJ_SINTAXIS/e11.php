<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,tr,td{
        border:1px solid black;
    }
</style>
<body>
    
</body>
</html>
<table>
<?php
$r=0;
$g=0;
$b=0;
$rgb=0;

for($i=0; $i<=250; $i=$i+50) {
  //$rgb.=$i.","; 

  for ($z=0; $z<=250 ; $z=$z+50) { 
    
     //$rgb.=$z.","; 
    
     for ($y=0; $y <= 250; $y=$y+50) { 
      //$rgb.=$y."<br>";
       echo dechex($i)'($z).','.($y) <br>";
      
      
    }
  }
}

print_r($rgb);


?>
</table>