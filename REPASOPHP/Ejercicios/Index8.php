<?php
$personas = [ ["nombre"=>"Alvaro","altura"=>"1,69","email"=>"alvarocomenge@gmail.com"],
        ["nombre"=>"Jose","altura"=>"1,70","email"=>"jose@gmail.com"],
        ["nombre"=>"Jose","altura"=>"1,75","email"=>"andres@gmail.com"],
        ["nombre"=>"Jose","altura"=>"1,80","email"=>"luis@gmail.com"],
        ["nombre"=>"Jose","altura"=>"1,85","email"=>"pepe@gmail.com"],
];
?>
<table style="border: 1px solid black;padding:5px;">
<td style=""><td>
<th style="border: 1px solid black;padding:5px;">Nombre<th>
<th style="border: 1px solid black;padding:5px;">Altura<th>
<th style="border: 1px solid black;padding:5px;">Email<th>

<?php
foreach($personas as $clase){
    ?>
    <tr>
    <td style="border: 1px solid black;padding:5px;">1<td>
        <?php
    foreach($clase as $valor => $nombre){
        ?>
        
        <td style="border: 1px solid black;padding:5px;"><?php echo $nombre?><td>
    
        <?php
    }
        ?>
           </tr> 
        <?php
  
 
}
?>
</table>
<?php
?>
