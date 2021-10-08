<?php
    include "Connectiondb.php";

    $activa=0;
    if (!empty(isset($_POST['activa']))) {
        $activa = 1;
    }
    else {
        $activa = 0;
    }

    echo "activa = " . $activa;
    echo gettype($activa);

    $datos = array($_POST['codHotel'], $_POST['numhabitacion'], $_POST['capacidad'], $_POST['preciodia'], $activa);
    $pdo = Connect_db();
    
    $stmt = $pdo -> prepare('insert into habitaciones values (?,?,?,?,?)');
    $stmt->bindParam(1, $datos[0]);
    $stmt->bindParam(2, $datos[1]);
    $stmt->bindParam(3, $datos[2]);
    $stmt->bindParam(4, $datos[3]);
    $stmt->bindParam(5, $datos[4]);
    $stmt->execute();

    echo "Inserction Completed";
    //header('Refresh: 5; URL=MainPage.php');
?>