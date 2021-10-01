<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones </title>
    <link rel="stylesheet" href="MainPage.css" />
</head>

<body>
    <h1>Autor: José Juan</h1>
    <h1>Habitaciones</h1>
    <form action="InsertarPage.html" method="post">
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
                <!--
                        <tr>
                        <td>
                            222222
                        </td>
                        <td>
                            4
                        </td>
                        <td>
                            3
                        </td>
                        <td>
                            60
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <input value="modificar" type="submit" formaction="ModificarPage.html"/>
                        </td>
                        <td>
                            <input value="eliminar" type="submit" formaction="EliminarPage.html"/>
                        </td>
                    </tr>
                -->
                <?php
                    include("MainPageVisualize.php");
                    Visualize_Table_Habitaciones();
                ?>
            </tbody>
        </table>

        <input value="Insertar nuevo registro" type="submit" />
    </form>
</body>

</html>