<?php
    include "Connectiondb.php";
    $datos = array($_POST['capacidad'], $_POST['preciodia'], $_POST['codHotel'], $_POST['numhabitacion']);
    $pdo = Connect_db();
    /*
    $stmt = $pdo -> prepare('update habitaciones set capacidad=?, preciodia=?, activa=? where codHotel=? and numHabitacion=?');
    $stmt->bindParam(1, $datos[0]);
    $stmt->bindParam(2, $datos[1]);
    $stmt->bindParam(3, $datos[2]);
    $stmt->bindParam(4, $datos[3]);
    $stmt->bindParam(5, $datos[4]);
    $stmt->execute();
    */
    echo $_POST['activa']."\n";
    echo "Mofication Completed";
    header('Refresh: 5; URL=MainPage.php');
?>