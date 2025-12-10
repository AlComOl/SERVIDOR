<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

       
       .padre {
            width: 500px;
            height: 500px;
            background: lightgray;
            text-align: center;   /* centra el texto */
            padding: 10px;
            }

        .hijo {
            border:2px solid black;
            display: flex;              /* activa flexbox */
            justify-content: center;    /* centro horizontal */
            align-items: center;
            width: 60%;        /* centro vertical */
            height: 50%;
            background: lightblue;
            margin:100px;
            }
            .hijo label{
                margin:20px;
                
            }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<div class="padre">
    <div>
         <h2>LOGIN</h2>
    </div>
        <div class="hijo">
            <form  action="./autenticar.php" method="post" >
            <label>Usuario:</label>
             <input type="text" name="Usuario">
            <label>Password:</label>
             <input type="text" name="Password">
             <label>Recordar</label>
             <input type="checkbox" name="recordar" value="valor_si_marcado">
            <div>
                <button>Enviar</button>
            </div>
<?php

           if(isset($_SESSION["vacio"]) && $_SESSION["vacio"]==true){
              
            echo"<h3 style='color:red;'>El usuario y contraseña no pueden estar vacios</h3>";
          
           }
           
           
           if(isset($_SESSION["bandera"])){
             echo"<h3 style='color:red;'>Usuario o Contraseña erroneos</h3>";
           }
   


?>
            
        </div>
 
</div>    

</head>
<body>
    
</body>
</html>