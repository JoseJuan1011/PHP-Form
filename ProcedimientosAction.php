<?php
    session_start();
    include "Connectiondb.php";

    function generateTable(array $columnNames, array $rows ) {
        $output = "<table>";
        // Create the columns
        $output .= "<tr>";
        foreach ($columnNames as $columnName) {
            $output .= "<th>{$columnName}</th> ";
        }

        $output .= "</tr>";

        // Create the body rows
        foreach ($rows as $row) {
            $output .= "<tr>";
            foreach ($columnNames as $columnName) {
                $output .= "<td>{$row[$columnName]}</td>";
            }
            $output .= "</tr>";
        }
        
        $output .= "</table>";
        return $output;
    }

    function keyIsValid($value) {
        return is_string($value) && !is_numeric($value);
    }

    function proc1($nomHotel) {
        $pdo = Connect_db();

        $stmt = $pdo -> prepare("call proc_habitaciones_hotel (?);");
        $stmt ->bindParam(1, $nomHotel);
        $stmt -> execute();

        $rows = $stmt -> fetchAll();

        $pdo = null;

        $keys = array_filter(array_keys($rows[0]), "keyIsValid");

        $output = generateTable($keys, $rows);

        return $output;
    }

    function proc2($codHotel, $numhabitacion, $capacidad, $preciodia, $activa) {
        $pdo = Connect_db();

        $stmt = $pdo -> prepare("call proc_insert_habitacion(?,?,?,?,?,@hotel_exists,@validate_insert);");
        $stmt -> bindParam(1, $codHotel);
        $stmt -> bindParam(2, $numhabitacion);
        $stmt -> bindParam(3, $capacidad);
        $stmt -> bindParam(4, $preciodia);
        $stmt -> bindParam(5, $activa);
        $stmt -> execute();
        $stmt -> closeCursor();

        $row = $pdo -> prepare("select @hotel_exists as hotelExists, @validate_insert as validateInsert");
        $row -> execute();
        $row = $row -> fetch();

        $pdo = null;

        $hotelExists = $row["hotelExists"] == 1 ? true : false;
        $validateInsert = $row["validateInsert"] == 1 ? true : false;

        if (!$hotelExists) {
            return "<p>El hotel pasado por parámetro no existe</p>";
        }

        if (!$validateInsert) {
            return "<p>Ha ocurrido un error inseperado, o se ha introducido un valor inválido</p>";
        }

        return "<p>La insercción del hotel ha sido realizada</p>";
    }

    function proc3($nomHotel, $preciodia) {
        $pdo = Connect_db();

        $stmt = $pdo -> prepare('call proc_cantidad_habitaciones (?, ?, @cantidadTotal, @cantidadTotal_preciodia);');
        $stmt -> bindParam(1, $nomHotel);
        $stmt -> bindParam(2, $preciodia);
        $stmt -> execute();
        $stmt -> closeCursor();

        $row = $pdo -> prepare("select @cantidadTotal as cantidadTotal, @cantidadTotal_preciodia as cantidadTotal_preciodia;");
        $row -> execute();
        $row = $row -> fetch();

        $pdo = null;

        $cantidadTotal = $row["cantidadTotal"];
        $cantidadTotal_preciodia = $row["cantidadTotal_preciodia"];

        $rowsOutput = array(
            0 => array("cantidadTotal" => $cantidadTotal, "cantidadTotal_preciodia" => $cantidadTotal_preciodia)
        );

        $output = generateTable(["cantidadTotal", "cantidadTotal_preciodia"], $rowsOutput);
        $output .= "<p>
            Significado de campos:
            <ul>
                <li>cantidadTotal: cantidad total de habitaciones de un hotel.</li>
                <li>cantidadTotal_preciodia: cantidad total de habitaciones de un hotel, el cual tengan un menor precio por día que el indicado.</li>
            </ul>
        </p>";
        return $output;
    }

    function proc4($coddnionie) {
        $pdo = Connect_db();
        $stmt = $pdo -> prepare("select `sp_dni_suma`(?) as `dni_suma`;");
        $stmt -> bindParam(1, $coddnionie);
        $stmt -> execute();
        // 

        $rows = $stmt -> fetch();
        $stmt -> closeCursor();

        $pdo = null;

        $rowsOutput = array( 
            0 => array( "dni_suma" => $rows["dni_suma"])
        );

        $output = generateTable(["dni_suma"], $rowsOutput);

        return $output;
    }

    $mainOutput = "";

    $procedimiento = $_POST['procedimiento'];

    switch ($procedimiento) {
        case "proc1":
            $mainOutput .= proc1($_POST['nomHotel']);
        break; 
        
        case "proc2":
            $activa = 0;
            if (isset($_POST['activa'])) {
                $activa = 1;
            }
            $mainOutput .= proc2($_POST['codHotel'], $_POST['numhabitacion'], $_POST['capacidad'], $_POST['preciodia'], $activa);
        break;

        case "proc3":
            $mainOutput .= proc3($_POST['nomHotel'], $_POST['preciodia']);
        break;

        case "proc4":
            $mainOutput .= proc4($_POST['coddnionie']);
        break;
        default: 
            $mainOutput .=  "Error. No ha seleccionado un procedimiento a utilizar";
        break;
    }
    
    // Esto es redirección de el output en HTML a la página de procedimientos, 
    // mediante la extensión cURL.

    $_SESSION["procedimientoOutput"] = $mainOutput;

    header('Refresh: 0; URL=ProcedimientosPage.php');
