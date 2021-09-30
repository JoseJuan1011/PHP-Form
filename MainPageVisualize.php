<?php
    function Visualize_Table_Habitaciones() {
        $servername = "localhost";
        $dbn = "mysql:host=$servername;dbname=bdHoteles";
        $username = "username";
        $password = "password";

        try {
            $conn = new PDO($dbn, $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }

        catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
    }
?>