<?php

if (isset($_POST['nombre'])){//verifica si se ha enviado el formulario
  
 $mi_Formulario=$_POST;
  echo "Datos Formulario".'<br>';
 $mi_Formulario=$_POST;

    foreach ($mi_Formulario as $key => $valor) {
//is_array da true si es un array false si no lo es 
        if(is_array($valor)){
           //implode parte el array como una cadena de texto
           echo $key.'=>'.implode(',', $valor).'<br>';

      
        }else{
            echo $key.' =>'. $valor.'<br>';
        }
    }

     }else{
        print_r("El formulario no se ha enviado");
     }




// print_r($_POST);
// echo $_POST["nombre"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="./recibir.php" method="get">

<input type="text" name="nombre" placeholder="NOMBRE"></input>
<input type="text" name="apellido" placeholder="APELLIDO"></input>

<input type="submit" name="enviar" value="enviar"></input>
</form> -->


<!-- <form action="./recibir.php" method="POST">

<select name="lenguajes[]" multiple="true">
    <option value="c">C</option>
    <option value="java">Java</option>
    <option value="php">PHP</option>
    <option value="python">Python</option>
</select>
<br>
    <input type="checkbox" name="curso[]" value="daw" /> daw <br/>
    <input type="checkbox" name="curso[]" value="asir" /> asir<br/>
    <input type="checkbox" name="curso[]" value="smr" /> smr<br/>
    <input type="checkbox" name="curso[]" value="universidad" /> universidad <br/>
    

<input type="submit" name="enviar">
</form>

<form action="./recibir.php" method="POST">

<select name="lenguajes[]" multiple="true">
    <option value="c">C</option>
    <option value="java">Java</option>
    <option value="php">PHP</option>
    <option value="python">Python</option>
</select>
<br>
    <input type="checkbox" name="curso[]" value="daw" /> daw <br/>
    <input type="checkbox" name="curso[]" value="asir" /> asir<br/>
    <input type="checkbox" name="curso[]" value="smr" /> smr<br/>
    <input type="checkbox" name="curso[]" value="universidad" /> universidad <br/>

<input type="submit" name="enviar">
</form> -->

<div >
<form action="" method="POST">
    <div>
    <div >
    <p>Nombre</p>
    <input type="text" name="nombre">
    </div>
    <div >
    <p>Apellido</p>
    <input type="text" name="apellido">
    </div>
    <div >
    <p>Password</p>
    <input type="password" name="pswd">
    </div>
    <br>
</div>
<div >

    <label for="prof">Elige la opcion:</label>
     <select >
        <option value="alumno">Alumno</option>
        <option value="profesor">Profesor</option> 
     </select>
</div >
<div>
    <p>Actividad Favorita :</p>
    <div>
         <input type="checkbox" id="deporte" name="Afavorita[]" value="deporte">
        <label for="" >Deporte</label>
    </div >
    <div>
        <input type="checkbox" id="pintura" name="Afavorita[]" value="pintura">
        <label for="">Pintura</label>
    </div>
    <div>
        <input type="checkbox" id="vela" name="Afavorita[]" value="vela">
        <label for="" >Vela</label>
    </div>
    <div>
        <input type="checkbox" id="fotografia" name="Afavorita[]" value="fotografia">
        <label for="">Fotografia</label>
    </div>
   
</div>
<br>
<div>
    <p>Genero :</p>
    <input type="radio" id="masc" name="Sexo" value="Masculino">
     <label for="html">Masculino</label>
    <input type="radio" id="Fem" name="fav_language" value="Femenino">
     <label for="html">Femenino</label>  
</div>
<br>
<div>  
    <label for="quantity">Edad (entre 1 and 8):</label>
    <input type="number" id="quantity" name="Edad" min="1" max="21">
</div>
    <div style="text-align:center ; padding-top:10px">
    <textarea id="review" name="review" rows="4" cols="70" >
    Estoy estudiando en IES Fuente San Luis
    </textarea>
</div>

<input type="submit" value="enviar">
   
</form>
</div>

</body>
</html>