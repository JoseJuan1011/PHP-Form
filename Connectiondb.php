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

    function select_codHotel($form) {
        $pdo = Connect_db();

        $stmt = $pdo->prepare("SELECT codHotel from hoteles");
        $stmt->execute();

        echo '<select name="codHotel" form="'.$form.'">';
        while ($row = $stmt->fetch()) {
                $option = '<option value="'.$row['codHotel'].'">'.$row['codHotel'].'<option/>';
                if ($option != '<option></option>') {
                    echo $option;
                }
        }
        echo '<select/>';

        $pdo = null;
    }
?>