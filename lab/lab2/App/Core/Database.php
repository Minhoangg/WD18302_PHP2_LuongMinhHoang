<?php
namespace App\Core;

use mysqli;
class Database{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            die("Kết nói thất bại: " . $conn->connect_errno());
            echo '</br>';

        }else{
            echo 'kết nói ok';
            echo '</br>';

        }
    }

    public function HeloWord(){
        echo "Hello Word";
    }
}