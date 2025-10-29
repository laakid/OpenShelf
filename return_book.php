<?php
session_start();
require_once 'lbms.php';

if (!isset($_SESSION['UserID'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userID = $_SESSION['UserID'];
    $bookID = $_POST['book_id'];

    $returned = returnBook($bookID, $userID);

    if ($returned) {
        header("Location: my_books.php?returned=1");
        exit();
    } else {
        header("Location: my_books.php?error=1");
        exit();
    }
}
?>
