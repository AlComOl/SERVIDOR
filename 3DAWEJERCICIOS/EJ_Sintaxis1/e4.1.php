<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Multiplicar</title>
</head>
<style>
    table{
        border:2px solid black;
        width: 270px;
    }
    td{
       border:1px solid black; 
       width: 30px;
       height: 30px;
    }
    tr{
       border:1px solid black;
       /* width: 30px;
       height: 30px; */
    }
    </style>
<body>
    
</body>
</html>

<?php
// echo"<table>";
// echo"<tr>";
// for($i=1;$i<=10;$i++){
//       echo"<td style='background-color:red;color:white';>".$i."</td>";
//     for($z=2;$z<=10;$z++){
//        if($i===1){     
//             echo"<td style='background-color:blue ; color:white;'>".$i*$z."</td>";
//         }else{
//             echo"<td style='background-color:white'>".$i*$z."</td>";
//         }
//     }
//     echo"</tr>";
// }


echo"<table>";

for ($i=1; $i <=10 ; $i++) {
    echo"<tr>"; 
    for ($z=1; $z <=10; $z++) { 
        if($i==1){
            echo"<td style='background-color:blue;color:white;'>".$i*$z."</td>";
        }elseif ($z==1) {
            echo"<td style='background-color:red;color:white;'>".$i*$z."</td>";
        }else{
             echo"<td style='background-color:white;color:black;'>".$i*$z."</td>";
        }
    }
    
}

echo"</table>";


// echo "<table border=1>";



// for ($i = 1; $i <= 10; $i++) {

// echo "<tr>";
// for ($j = 1; $j <= 10; $j++) {

// if ($i == 1) {
// echo "<td style='background-color:blue; color:white;'>" . $i * $j . "</td>";
// } elseif ($j == 1) {
// echo "<td style='background-color:red; color:white;'>" . $i * $j . "</td>";
// } else {
// echo "<td>" . $i * $j . "</td>";
// }
// }
// echo "</tr>";
// }

// ?>

</table>











