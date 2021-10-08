<?php
    include 'Connectiondb.php';
    $datos = array(
        $_POST['codHotel'], 
        $_POST['numhabitacion'], 
        $_POST['capacidad'], 
        $_POST['preciodia'], 
        $_POST['activa']
    );

    $pdo = Connect_db();

    $stmt = $pdo -> prepare('insert into habitaciones values(?,?,?,?,?)');
    $stmt->bindParam(1, $datos[0]);
    $stmt->bindParam(2, $datos[1]);
    $stmt->bindParam(3, $datos[2]);
    $stmt->bindParam(4, $datos[3]);
    $stmt->bindParam(5, $datos[4]);
    $stmt->execute();

    echo "Insertion Completed";

    $pdo= NULL;
    
    header('Refresh: 5; URL=MainPage.php');
?>