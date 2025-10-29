<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'){
    die("Access denied.");
}

require 'lbms.php';

if(!isset($_GET['id'])){
    die("No book ID provided.");
}

$bookID = $_GET['id'];

if (deleteBook($bookID)){
    header('Location: manage_book.php');
    exit();
}else{
    echo "Failed to delet book.";
}
?>