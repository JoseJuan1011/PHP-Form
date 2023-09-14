<?php
    function Connect_db() {
        $servername = "localhost";
        $dbn = "mysql:host=$servername;dbname=bdhoteles";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO($dbn, $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        }

        catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
    }

    // En este caso para hacer parámetros opcionales, lo recomendado es lo siguiente: ?tipo $nombreParámetro
    function select_codHotel($form, ?bool $nameAsValue = false, ?bool $nomHotelNamed = false) {
        $pdo = Connect_db();

        $stmt = $pdo->prepare("SELECT codHotel, nomHotel from hoteles");
        $stmt->execute();

        $select_name = $nomHotelNamed ? "nomHotel" : "codHotel";

        echo '<select name="'.$select_name.'" form="'.$form.'">';
        while ($row = $stmt->fetch()) {
                $codHotelValue = $nameAsValue ? $row['nomHotel'] : $row['codHotel'];
                $option = '<option value="'.$codHotelValue.'">'.$row['nomHotel'].'<option/>';
                if ($codHotelValue != null) {
                    echo $option;
                }
        }
        echo '<select/>';

        $pdo = null;
    }
?>