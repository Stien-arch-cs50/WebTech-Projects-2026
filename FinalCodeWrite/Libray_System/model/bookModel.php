<?php
include_once("E:\New folder\xampp\htdocs\WebTech2026\FinalCodeWrite\Libray_System\config\db.php");

// Select the database
mysqli_select_db($conn, $dbName);

// Create employees table if not exists
$tableSql = "CREATE TABLE IF NOT EXISTS books (
    id INT  AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) ,
    author VARCHAR(255),
    category VARCHAR(100),
    status ENUM('Available','Issued') DEFAULT 'Available'
)";




// Insert book
function insertBook($title, $author, $category, $status) {
    global $conn;
    $sql = "INSERT INTO books (title, author, category, status) VALUES ('$title','$author','$category','$status')";
    return mysqli_query($conn, $sql);
}

// Get all books
function getBooks() {
    global $conn;
    $sql = "SELECT * FROM books";
    return mysqli_query($conn, $sql);
}

// Update book
function updateBook($id, $title, $author, $category, $status) {
    global $conn;
    $sql = "UPDATE books SET title='$title', author='$author', category='$category', status='$status' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

// Delete book
function deleteBook($id) {
    global $conn;
    $sql = "DELETE FROM books WHERE id=$id";
    return mysqli_query($conn, $sql);
}



?>