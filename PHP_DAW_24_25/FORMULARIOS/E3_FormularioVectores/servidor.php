<!-- Se desea realizar un formulario en el servidor que genere 10 inputs 
 y un botón, a continuación, el servidor recogerá todos
 los datos los mostrará y calculará la suma total.  -->


<?php

//Si el formulario ha sido enviado, se ejecuta el bloque de código dentro de este if.
if(isset($_POST["enviar"])){
  
    $sumaNumeros=$_POST["n"];//recogemos los valores de los campos del formulario
 
    echo"<h1>resultado:".array_sum($sumaNumeros)."</h1>";  //suma los numeros del array con la función

}

//creamos el formulario
echo "<form action=''method='post'>";
    //iteramos 10 veces por las casillas
    for ($i=0; $i <10 ; $i++) {
        echo"<label for='numeros'>número $i:</label>";//texto
        echo"<input type='text' name='n[]'><br>";//creamos el input
    
    }
    echo"<input type='submit' name='enviar'>";//boton
    echo"</form>";//cerramos formulario

    ?>
 









 




