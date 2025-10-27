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
    body {
     background: linear-gradient(to bottom right, #bbdefb, #64b5f6, #2196f3);
    }

    .n,p,f,g,e,des{
        width: 200px;
        height: 250px;
        border:solid green 1px;
        margin:20px;
        padding:10px
    }
    .n{
        background: linear-gradient(to right, #fff9c4, #fff176, #ffd54f);
    }
    .p{
        background: linear-gradient(to right, #a8e6cf, #81c784, #4caf50)
    }
    .f{
        background: linear-gradient(to right, #ffcdd2, #e57373, #f44336);
    }
    .g{
        background: linear-gradient(to right, #f8bbd0, #f48fb1, #ec407a);
    }
    .e{
        background: linear-gradient(to right, #bbdefb, #64b5f6, #2196f3);
    }
    .des{
        background: linear-gradient(to right, #d7ccc8, #a1887f, #6d4c41);
    }

    </style>
<body>
    <form action="./erecibir.php" method="POST">
    <div class="n">
        <h5>Datos</h5>
        <label>Nombre</label>
        <input type="text" name="Nombre">
        <label>Apellido</label>
        <input type="text" name="Apellido">
        <label>Contraseña</label>        
        <input type="text" name=" Contraseña">
    </div>
    <div class="p">
         <h5>Profesion:</h5>
        <select name="puesto[]" id="">
            <option value="alumno">Alumno</option>
            <option value="Profesor">Profesor</option>
        </select>
    </div>
    <div class="f">
        <h5>Deporte favorito:</h5>
        <input type="checkbox" name="deporte[]" value="Correr">
        <label for="">Correr</label><br>       
        <input type="checkbox" name="deporte[]" value="Senderismo">
        <label for="">Senderismo</label><br>
        <input type="checkbox"  name="deporte[]" value="Pim Pom">
        <label for="">Pim Pom</label><br>
        <input type="checkbox"  name="deporte[]" value="Ciclismo">
        <label for="">Ciclismo</label><br>
        <input type="checkbox"  name="deporte[]" value="Esgrima">
        <label for="">Esgrima</label><br>
    </div>
    <div class="g">
        
         <h5>Genero</h5>
        <input type="radio" name="genero[]" value="Masculino">
        <label for="">Masclino</label><br>       
        <input type="radio" name="genero[]" value="Femenino">
        <label for="">Femenino</label><br>
    </div>
    
    <div class="e">
         <h5>Edad</h5>
    <label type="number">Between 0 and 100</label>
    <input type="number" name="edad[]">
    </div>
    <div class="des">
         <h5>Descripcion</h5>
        <label>Un brebe descripción</label>
        <br>
        <textarea name="descripcion[]">

        </textarea>
    </div>

    <input type="submit" name="enviar" value="Enviar" >

    <div></div>
    </form>
</body>
</html>
