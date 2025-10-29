<?php
session_start();
require 'lbms.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['UserID'])) {
        $id = intval($_SESSION['UserID']);

        if (deleteUserByID($id)) {
            session_destroy();
            header("Location: login.php");
            exit();
        } else {
            echo "Fail to delete your account";
        }
    } else {
        echo "User ID not found in session.";
    }
}
?>
