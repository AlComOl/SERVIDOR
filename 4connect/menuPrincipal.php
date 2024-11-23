<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>Menu 4Connect</title>
</head>
<body>
    <h1><span style="color: yellow;">4</span>Connect</h1>

    <h2>¡Escoge el modo de juego!</h2>

    <div class="botones">

        <form action="juego.php" method="post">
            <button type="submit" name="modo" value="normal">Jugador VS Jugador</button>
        </form>

        <form action="juego.php" method="post">
            <button type="submit" name="modo" value="ia">Jugador VS ChatGPT</button>
        </form>

    </div>
</body>
</html>