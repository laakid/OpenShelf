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

    // Insert into borrowed_books table
    $borrowed = borrowBook($userID, $bookID);

    if ($borrowed) {
        updateBookStatus($bookID, 'borrowed');
        header("Location: books.php?success=1");
        exit();
    } else {
        header("Location: books.php?error=1");
        exit();
    }
}
?>
