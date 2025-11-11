<?php
session_start();
if (!isset($_SESSION['UserID'])) {
    die("You must be logged in to edit your profile.");
}

require 'lbms.php';

$id = $_SESSION['UserID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (updateUserProfile($id, $username, $email, $password)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Failed to update profile.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #faf8f3 0%, #f5f1e8 100%);
            min-height: 100vh;
            padding-bottom: 80px;
        }

        nav ul {
            background-color: #f7e3c2ff;
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav ul li a {
            text-decoration: none;
            color: #000000ff;
            font-weight: bold;
            padding: 8px 16px;
            display: block;
        }

        nav ul li a:hover {
            background-color: #eddbb8;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(245, 240, 235, 0.6);
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 6px;
        }

        .container h2 {
            text-align: center;
            color: #4b3a1e;
        }

        .container p,
        .container ul {
            color: #a38554ff;
            line-height: 1.6;
        }

        form {
            max-width: 500px;
            margin: 60px auto;
            padding: 55px;
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            margin-left: 45px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            width: 75%;
            padding: 8px;
            margin-left: 45px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #5a4a3a;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 45px;
        }

        form input[type="submit"]:hover {
            background-color: #4b3a1e;
        }

        button[type="button"] {
            background-color: #dc3545;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        button[type="button"]:hover {
            background-color: #c82333;
        }

        h1 {
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #5a4a3a;
            text-align: center;
            margin: 45px auto;
        }

        footer {
            background-color: white;
            padding: 40px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #666;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }
        
    </style>
</head>

<body>
    <header>
        <h1>OpenShelf</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="my_books.php">My Books</a></li>
                <li><a href="logout.php">Log Out</a></li>
                <li><a href="edit.php">Edit Profile</a></li>
            </ul>
        </nav>
    </header>

    <h2>Edit Your Profile</h2>
    <form id="profileForm" method="POST" action="edit.php">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter your username" required>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" required>

        <label>New Password:</label>
        <input type="password" name="password" placeholder="Enter new password" required>

        <div>
            <input type="submit" value="Update">
            <button type="button" onclick="confirmDelete()">Delete My Account</button>
        </div>
    </form>

    <script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete your account? This action cannot be undone.")) {
                const form = document.getElementById('profileForm');
                form.action = 'delete.php';
                form.submit();
            }
        }
    </script>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
    </footer>
</body>

</html>
