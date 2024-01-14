<?php
namespace src\Controllers;
use src\Models\BookModel;
class BookController {
    public function index() {
        // Hiển thị danh sách sách từ model
        $books = BookModel::getAllBooks();
        include 'src/Views/Book/index.php';
    }

    public function show($id) {
        // Hiển thị thông tin chi tiết của một cuốn sách
        $book = BookModel::getBookById($id);
        include 'src/Views/Book/BookDetail.php';
    }
}
