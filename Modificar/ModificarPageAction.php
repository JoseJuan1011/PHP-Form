<?php
    include "../db/Connectiondb.php";

    $activa=0;
    if (isset($_POST['activa'])) {
        $activa = 1;
    }
    else {
        $activa = 0;
    }

    $datos = array($_POST['capacidad'], $_POST['preciodia'], $activa, $_POST['codHotel'], $_POST['numhabitacion']);
    $pdo = Connect_db();
    
    $stmt = $pdo -> prepare('update habitaciones set capacidad=?, preciodia=?, activa=? where codHotel=? and numHabitacion=?');
    $stmt->bindParam(1, $datos[0]);
    $stmt->bindParam(2, $datos[1]);
    $stmt->bindParam(3, $datos[2]);
    $stmt->bindParam(4, $datos[3]);
    $stmt->bindParam(5, $datos[4]);
    $stmt->execute();

    echo "Mofication Completed";
    header('Refresh: 2; URL=../MainPage.php');  
?>