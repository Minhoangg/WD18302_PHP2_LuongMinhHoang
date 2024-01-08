<?php
function select_book()
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

$sql = 'SELECT * FROM book';
$stmt = $connection->prepare($sql);
if (!$stmt) {
die("Prepare failed: " . $connection->error);
}
$stmt->execute();

$result = $stmt->get_result();
$rows = array(); // Initialize an array to store all rows

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
$rows[] = $row; // Add each row to the array
}

$connection->close();

return $rows; // Return the array containing all rows
}
