<button?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar.php" method="POST">
    <br>
         <label for="producto">TELE</label>
         <input type="hidden" id="producto_tel" name="producto" value="TELE">
         <br>
         <label for="precio">precio 100euros</label>
         <br>
         <input type="hidden" id="id_precio" name="precio" value="100">
         <input type="number" id="id_cantidad_tel" name="cantidad" min="1" max="5" placeholder="Cantidad">
         <button type="submit">COMPRAR</button>
        </div> 
        <br>
        <br>
        <div>
         <label for="producto">RATÓN</label>
         <input type="hidden" id="producto_raton" name="producto" value="RATON">
         <br>
         <label for="precio">precio 5euros</label>
         <br>
         <input type="hidden" id="precio_rat" name="rat" VALUE="5">
         <input type="number" id="" name="cantidad_rat" min="1" max="5">
         <button type="submit">COMPRAR</button>
        </div>
        <br>
        <br>
        <div>
         <label for="quantity">TECLADO</label>
         <input type="hidden" id="producto_tecl" name="producto" value="TECLADO">
         <br>
         <label for="precio">precio 10euros</label>
         <br>
         <input type="hidden" id="precio_tecl" name="teclado" VALUE="10">
         <input type="number" id="cantidad_tecl" name="cantidad" min="1" max="5">
         <button type="submit">COMPRAR</button>
        </div>
        <br>
        <br>
        <div>
        <label for="quantity">CPU</label>
        <input type="hidden" id="producto_cpu" name="producto" value="200">
         <br>
         <label for="precio">precio 200euros</label>
         <br>
         <input type="hidden" id="precio_cpu" name="CPU" value="200">
         <input type="number" id="cantidad_cpu" name="cantidad" min="1" max="5">
         <button type="submit">COMPRAR</button>
        </div>
        <br>

        <button id="" name="">Eliminar Sesión</button>

    </form>
    
</body>
</html>