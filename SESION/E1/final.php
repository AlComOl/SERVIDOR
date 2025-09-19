<?php
session_start();//hay que ponerlo siempre
?>

<h2>ya estamos en el final</h2>

<?php
echo "El usuario : ".$_SESSION['id_usuario'];//seguarda el id usuario en la variable $SESSION
echo "<br>";
echo "El apellido: ".$_SESSION['id_apellido'];

?>