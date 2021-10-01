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
?>