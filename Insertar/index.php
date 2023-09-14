<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Registro</title>
    <link rel="stylesheet" href="InsertarPage.css"/>
    <?php
    include "../db/Connectiondb.php";
    ?>
</head>

<body>
    <h1>Insertar Registro</h1>
    <form action="../MainPage.php" id="InsertarForm" method="post">
        <ul>
            <li>
                <?php
                select_codHotel("InsertarForm");
                ?>
            </li>
            <li>
                numhabitacion <input type="number" name="numhabitacion" placeholder="Escribalo aquí" min="1" />
            </li>
            <li>
                capacidad <input type="number" name="capacidad" placeholder="Escribalo aquí" min="1" />
            </li>
            <li>
                preciodia <input type="number" name="preciodia" placeholder="Escribalo aquí" min="1" />
            </li>
            <li>
                activa <input type="checkbox" name="activa"/>
            </li>
        </ul>
        <input type="submit" value="Insertar registro" formaction="InsertarAction.php" />

        <input type="submit" value="Volver a la página principal" />
    </form>
</body>

</html>