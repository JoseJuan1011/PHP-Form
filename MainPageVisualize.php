<?php
    include "Connectiondb.php";
    function Visualize_Table_Habitaciones() {
        $pdo = Connect_db();

        $stmt = $pdo -> prepare("select * from habitaciones");
        
        while ($row = $stmt->fetch()) {
            echo "<tr>";
                echo "<td>".$row['codHotel']."</td>";
                echo "<td>".$row['numHabitacion']."</td>";
                echo "<td>".$row['capacidad']."</td>";
                echo "<td>".$row['preciodia']."</td>";
                echo "<td>".$row['activa']."</td>";
                echo "<td>".'<input value="modificar" type="submit" formaction="ModificarPage.html"/>'."</td>";
                echo "<td>".'<input value="eliminar" type="submit" formaction="EliminarPage.html"/>'."</td>";
            echo "</tr>";
        }

        $pdo = null;
    }
?>