<?php
    include "../db/Connectiondb.php";

    $datos = array($_POST['codHotel'], $_POST['numhabitacion']);

    $pdo = Connect_db();

    $stmt = $pdo->prepare("DELETE from estancias where codHotel = ? and numhabitacion = ?");
    $stmt->bindParam(1, $datos[0]);
    $stmt->bindParam(2, $datos[1]);
    $stmt->execute();

    $stmt = $pdo->prepare("DELETE from habitaciones where codHotel = ? and numhabitacion = ?");
    $stmt->bindParam(1, $datos[0]);
    $stmt->bindParam(2, $datos[1]);
    $stmt->execute();

    echo "Elimination Completed";

    $pdo = null;

    header("refresh: 2; Url=../MainPage.php");
?>