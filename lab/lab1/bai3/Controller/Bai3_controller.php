<?php
include "../Model/Method.php";

if ((!empty($_POST['name_book']) ? $book_name = $_POST['name_book'] : $book_name = ""));

$info_book = select_book($book_name);

include "../Views/view.php";
