<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Access denied.");
}

require 'lbms.php';

if (!isset($_GET['id'])) {
    die("No user ID provided.");
}

$id = $_GET['id'];

if (deleteUserByID($id)) {
    header('Location: manage_user.php');
    exit();
} else {
    echo "Failed to delete user.";
}
?>