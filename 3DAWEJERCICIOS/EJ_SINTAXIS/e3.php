<?php
// $Myarray=[[9],[8]];

?>
<table style="border: 1px solid black;width: 400px;  height: 400px; " >
<?php
 for ($i=1; $i <9 ; $i++) { 

    echo"<tr>";
    
    for ($z=1; $z < 8; $z++) { 
        
        if($z %2==0){
          
            echo '<td style="background-color: black;"> <?php echo"$z" ?> </td>';
            
        }else{
              echo '<td style="background-color: black;"></td>';
        }
    
    }
    echo"</tr>";
 }
 ?>
 </table>
<?php
?>