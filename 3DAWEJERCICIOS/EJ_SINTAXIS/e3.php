<?php
$Myarray=[[9],[8]];

?>
<table style="border: 2px solid black;width: 270px;  height: 270px;border-collapse: collapse;" >
<?php
 for ($i=1; $i <9 ; $i++) { 

    echo"<tr>";
    
    for ($z=1; $z < 8; $z++) { 
        
        if(($z+$i) %2==1){
          
            echo '<td style="background-color: black;width: 30px;height: 30px; "></td>';
            
        }else{
              echo '<td style="background-color: white;width: 30px;height: 30px;"></td>';
        }
    
    }
    echo"</tr>";
 }
 ?>
 </table>
<?php
?>