<?php
  $fp = fopen('datos.txt', 'a');
    fwrite($fp, 'Julio');
    fwrite($fp, 'Noguera');
    fclose($fp);
?>
