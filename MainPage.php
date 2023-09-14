<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones </title>
    <link rel="stylesheet" href="MainPage.css" />
    <link rel="stylesheet" href="Table.css" />
</head>

<body>
    <h1>Autor: José Juan</h1>
    <h1>Habitaciones</h1>
    <table>
        <thead>
            <tr>
                <th>codHotel</th>
                <th>numHabitacion</th>
                <th>capacidad</th>
                <th>preciodia</th>
                <th>activa</th>
                <th>modificar</th>
                <th>eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "mainPageVisualize.php";
            Visualize_Table_Habitaciones();
            ?>
        </tbody>
    </table>
    <form action="InsertarPage.php" method="POST" >
        <input value="Insertar nuevo registro" type="submit"/>
        <input value="Procedimientos" type="submit" formaction="ProcedimientosPage.php"/>
    </form>
</body>

</html>