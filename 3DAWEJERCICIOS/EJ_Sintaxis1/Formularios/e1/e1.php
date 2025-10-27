<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        margin:30px;
    }

    </style>
<body>
    <form action="./e1" method="POST">
    <div class="">
        <label>Nombre</label>
        <input type="text" name="Nombre">
        <label>Apellido</label>
        <input type="text" name="Apellido">
        <label>Contraseña</label>        
        <input type="text" name=" Contraseña">
    </div>
    <div class="">
         <label>Profesion:</label>
        <select name="" id="">
            <option type="text" name="Alumno"  value="value1">Alumno</option>
            <option type="text" name="Profesor" value="value2">Profesor</option>
        </select>
    </div>
    <div class="">
        <input type="checkbox" id="Correr" name="Correr" value="">
        <label for="">Correr</label><br>       
        <input type="checkbox" id="" name="Senderismo" value="">
        <label for="">Senderismo</label><br>
        <input type="checkbox" id="" name="Pim Pom" value="">
        <label for="">Pim Pom</label><br>
        <input type="checkbox" id="" name="Ciclismo" value="">
        <label for="">Ciclismo</label><br>
        <input type="checkbox" id="" name="" value="">
    </div>
    <div>
        <input type="radio" id="" name="" value="">
        <label for="">Masclino</label><br>       
        <input type="radio" id="" name="" value="">
        <label for="">Femenino</label><br>
    </div>
    <div class="">
    <label type="number"> Edad (Between 0 and 100)</label>
    <input type="number" id="edad" name="edad">
    </div>
    <div calss="">
        <label>Un brebe descripción</label>
        <br>
        <textarea name="descripcion" id="descripcion">

        </textarea>
    </div>

    <input type="submit" value="Enviar">

    <div></div>
      


    </form>
</body>
</html>
