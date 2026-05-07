<?php
include_once("E:\New folder\xampp\htdocs\WebTech2026\FinalCodeWrite\Libray_System\model\bookModel.php");

$action = $_POST['action'];

if ($action == "insert") {
    insertBook($_POST['title'], $_POST['author'], $_POST['category'], $_POST['status']);
    echo json_encode(["message" => "Book added successfully"]);
}

if ($action == "fetch") {
    $result = getBooks();
    $books = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $books[] = $row;
    }
    echo json_encode($books);
}

if ($action == "update") {
    updateBook($_POST['id'], $_POST['title'], $_POST['author'], $_POST['category'], $_POST['status']);
    echo json_encode(["message" => "Book updated successfully"]);
}

if ($action == "delete") {
    deleteBook($_POST['id']);
    echo json_encode(["message" => "Book deleted successfully"]);
}
?>
