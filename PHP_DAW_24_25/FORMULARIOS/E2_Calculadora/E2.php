<!-- Se desea realizar una calculadora de sólo SUMA, para ello tendremos dos inputs y un botón,
 cuando se aprete el botón deberá enviar el formulario al server haciendo la operación
 y mostrando el resultado. -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
 </head>
 <body>
 <!-- GET: los parámetros se pasan en la URL < 2048 caracteres, sólo ASCII
        Permite almacenar la dirección completa (marcador / historial)
        El navegador puede cachear las llamadas
        No se pueden enviar imágenes, binarios y archivos -->
 <!-- POST: parámetros ocultos (no encriptados)
          Sin límite de datos, permite datos binarios.
          No se pueden cachear
          Esconde los valores -->

    <form action="recibir.php" method="get">
        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <button>
            <input type="submit" name="enviar">
        </button>
    </form>
 </body>
 </html>