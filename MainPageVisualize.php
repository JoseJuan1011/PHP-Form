<?php
    include "Connectiondb.php";
    function Visualize_Table_Habitaciones() {
        $pdo = Connect_db();

        $stmt = $pdo -> prepare('select * from habitaciones');
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            echo
            "<tr>"."\n"
                ."<td>".$row['codHotel']."</td> \n"
                ."<td>".$row['numHabitacion']."</td> \n"
                ."<td>".$row['capacidad']."</td> \n"
                ."<td>".$row['preciodia']."</td> \n"
                ."<td>".$row['activa']."</td> \n"
                .'<form action="InsertarPage.php" method="post">'
                ."<td>".'<input value="modificar" type="submit" formaction="ModificarPage.php"/>'."</td> \n"
                ."<td>".'<input value="eliminar" type="submit" formaction="EliminarPage.php"/>'."</td> \n"
                .'<input type="hidden" name="codHotel" value="'.$row['codHotel'].'" />'
                .'<input type="hidden" name="numhabitacion" value="'.$row['numHabitacion'].'" />'
                ."</form>"
            ."</tr> \n";
        }

        $pdo = null;
    }
?>