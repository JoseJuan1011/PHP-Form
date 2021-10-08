<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ModificarPage.css">
    <title>Modificar Registro</title>
    <?php
    include "Connectiondb.php";
    ?>
</head>

<body>
    <h1>Modificar Registro</h1>
    <form action="MainPage.php" id="ModificarForm" method="post">
        <ul>
            <li>
                <?php
                select_codHotel("ModificarForm");
                ?>
            </li>
            <li>
                numhabitacion <input type="number" name="numhabitacion" placeholder="Escribalo aquí" min="1"/>
            </li>
            <li>
                capacidad <input type="number" name="capacidad" placeholder="Escribalo aquí" min="1"/>
            </li>
            <li>
                preciodia <input type="number" name="preciodia" placeholder="Escribalo aquí" min="1" />
            </li>
            <li>
                activa <input type="checkbox" name="activa" min="0" max="1"/>
            </li>
        </ul>
        <input type="submit" value="Modificar registro" formaction="ModificarPage.php" />

        <input type="submit" value="Volver a la página principal" />
    </form>
</body>

</html>