<?php

function select_book($book_name)
{
    include "conect.php";

    // Sử dụng dấu ? làm placeholder trong câu truy vấn
    $sql = 'SELECT * FROM book WHERE name = ?';
    
    // Chuẩn bị câu truy vấn
    $stmt = $conn->prepare($sql);

    // Bind giá trị vào câu truy vấn
    $stmt->bindParam(1, $book_name, PDO::PARAM_STR);

    // Thực thi câu truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $conn = null; // Đóng kết nối

    return $result;
}
