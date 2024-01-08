<?php
function select_book($book_name)
{
    $servername = "localhost";
    $database = "data";
    $username = "root";
    $password = "mysql";

// Create connection

    $connection = new mysqli($servername, $username, $password, $database);

// Check connection

    if (!$connection) {

        die("Connection failed: " . mysqli_connect_error());

    }

    $sql = 'SELECT * FROM book WHERE name = ?';
    $stmt = $connection->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $connection->error);
    }
    $stmt->bind_param("s", $book_name);
    $stmt->execute();


    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }
    $connection->close();

}
