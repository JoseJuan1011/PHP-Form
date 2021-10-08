<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EliminarPage.css" />
    <title>Eliminar Registro</title>
    <?php
    function registroAEliminar()
    {
        include "Connectiondb.php";

        $pdo = Connect_db();

        $stmt = $pdo->prepare('select * from habitaciones where codHotel=? and numHabitacion=?');
        $stmt->bindParam(1, $_POST['codHotel']);
        $stmt->bindParam(2, $_POST['numHabitacion']);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            echo '<tr>' . "\n"
                . "<td>" . $row['codHotel'] . "</td> \n"
                . '<input type="hidden" name="codHotel" value="' . $row['codHotel'] . '" />'
                . "<td>" . $row['numHabitacion'] . "</td> \n"
                . '<input type="hidden" name="numHabitacion" value="' . $row['numHabitacion'] . '" />'
                . "<td>" . $row['capacidad'] . "</td> \n"
                . "<td>" . $row['preciodia'] . "</td> \n"
                . "<td>" . $row['activa'] . "</td> \n"
                . "</tr>";
        }
        $pdo = null;
    }
    ?>
</head>

<body>
    <p>
        ¿Seguro que quiere eliminar el siguiente registro?
    </p>
    <table>
        <thead>
            <tr>
                <th>codHotel</th>
                <th>numHabitacion</th>
                <th>capacidad</th>
                <th>preciodia</th>
                <th>activa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                registroAEliminar();
            ?>
        </tbody>
    </table>
    <form action="EliminarAction.php" method="POST">
        <input type="hidden" name="codHotel" value="<?php echo $_POST['codHotel'] ?>" />
        <input type="hidden" name="numHabitacion" value="<?php echo $_POST['numHabitacion'] ?>" />
        <div id="buttonMenuPrincipal">
            <input type="button" value="Eliminar registro" />
            <input value="Volver a la página principal" type="submit" formaction="MainPage.php"/>
        </div>
    </form>
</body>

</html>