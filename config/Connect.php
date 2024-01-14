<?php
namespace config;

use PDO; // Thêm use statement này để sử dụng lớp PDO

class Connect {
    function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=data", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>
