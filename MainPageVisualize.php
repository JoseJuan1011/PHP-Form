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
                .'<input type="hidden" name="codHotel" value="'.$row['codHotel'].'" />'
                ."<td>".$row['numHabitacion']."</td> \n"
                .'<input type="hidden" name="numHabitacion" value="'.$row['numHabitacion'].'" />'
                ."<td>".$row['capacidad']."</td> \n"
                ."<td>".$row['preciodia']."</td> \n"
                ."<td>".$row['activa']."</td> \n"
                ."<td>".'<input value="modificar" type="submit" formaction="ModificarPage.php"/>'."</td> \n"
                ."<td>".'<input value="eliminar" type="submit" formaction="EliminarPage.html"/>'."</td> \n"
            ."</tr> \n";
        }

        $pdo = null;
    }
?>