<?php
echo"<table>";
for ($i=0; $i < 9; $i++) { 
    echo"<tr>";
    for ($x=0; $x < 9; $x++) { 
        if((($i+$x)%2)==0){
            echo '<td  style="border:1px solid; padding:30px; background-color:black;"></td>';
        }else{
            echo '<td  style="border:1px solid; padding:30px; background-color:white;"></td>';
        }
    }
    echo"</tr>";
}
echo"</table>";
?>