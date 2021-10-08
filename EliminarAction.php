<?php
    include "Connectiondb.php";
    $codHotel = $_POST['codHotel'];
    $numHabitacion = $_POST['numhabitacion'];
    $pdo = Connect_db();

    $stmt = $pdo -> prepare('delete from habitaciones where codHotel=? and numHabitacion=?');
    $stmt->bindParam(1, $codHotel);
    $stmt->bindParam(2, $numHabitacion);
    $stmt->execute();

    echo "Elimination Completed";
    
    $pdo = NULL;
    header('Refresh: 5; URL=MainPage.php');
?>