<?php
    include "Connectiondb.php";

    function proc1($nomHotel) {

    }

    function proc2($codHotel, $numhabitacion, $capacidad, $preciodia, $activa) {

    }

    function proc3($nomHotel, $preciodia) {

    }

    function proc4($coddnionie) {

    }

    $procedimiento = $_POST['procedimiento'];

    switch ($procedimiento) {
        case "proc1":
            proc1($_POST['nomHotel']);
        break; 
        
        case "proc2":
            $activa = 0;
            if (isset($_POST['activa'])) {
                $activa = 1;
            }
            proc2($_POST['codHotel'], $_POST['numhabitacion'], $_POST['capacidad'], $_POST['preciodia'], $activa);
        break;

        case "proc3":
            proc3($_POST['nomHotel'], $_POST['preciodia']);
        break;

        case "proc4":
            proc4($_POST['coddnionie']);
        break;
        default: 
        echo "Error. No ha seleccionado el procedimiento a utilizar";
        echo 
        '<form action="ProcedimientosPage.php" method="post">
            <input type="submit" value = "Volver"/>
        </form>';
        break;
    }
?>