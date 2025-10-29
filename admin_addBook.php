<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Access denied.");
}

require 'lbms.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['bookgenre'];
    $author = $_POST['author'];
    $year = $_POST['year_published'];

    // Handle file upload
    $coverName = $_FILES['cover']['name'];
    $coverTmp = $_FILES['cover']['tmp_name'];
    $coverPath = 'covers/' . basename($coverName);

    if (move_uploaded_file($coverTmp, $coverPath)) {
        if (AddBooks($title, $genre, $author, $year, $coverName)) {
            header('Location: manage_book.php');
            exit();
        } else {
            echo "Failed to add book.";
        }
    } else {
        echo "Failed to upload cover image.";
    }
}

?>

<!DOCTYPE html>
<html>
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
    }

    h1 {
        text-align: center;
        padding: 20px;
        color: #333;
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
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        text-align: center;
        margin-bottom: 30px;
    }

    .card h2 {
        color: #6b5b4f;
        margin-bottom: 10px;
    }

    .form-container {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        max-width: 600px;
        margin: 0 auto;
    }

    .form-container h2 {
        color: #6b5b4f;
        margin-bottom: 30px;
        text-align: center;
    }

    .form-container label {
        display: block;
        color: #555;
        font-weight: 500;
        margin-bottom: 8px;
        margin-top: 15px;
    }

    .form-container input[type="text"],
    .form-container input[type="date"],
    .form-container input[type="file"] {
        width: 100%;
        padding: 12px;
        border: 2px solid #f7e3c2ff;
        border-radius: 8px;
        font-size: 16px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        transition: border-color 0.3s;
    }

    .form-container input[type="text"]:focus,
    .form-container input[type="date"]:focus {
        outline: none;
        border-color: #eddbb8;
    }

    .form-container input[type="file"] {
        padding: 10px;
        cursor: pointer;
    }

    .form-container input[type="submit"] {
        width: 100%;
        background-color: #f7e3c2ff;
        color: #333;
        padding: 14px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 25px;
        transition: background-color 0.3s;
    }

    .form-container input[type="submit"]:hover {
        background-color: #eddbb8;
    }

    footer {
            background-color: white;
            padding: 50px;
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
<title>Add Book</title>

<body>
    <header>
        <h1>Welcome admin</h1>
        <nav>
            <ul>
                <li><a href="admin_index.php">Home</a></li>
                <li><a href="manage_user.php">Manage Users</a></li>
                <li><a href="manage_book.php">Manage Books</a></li>
                <li><a href="admin_logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="form-container">
            <h2>Add New Book</h2>
            <form method="POST" action="admin_addBook.php" enctype="multipart/form-data">
                <label>Title:</label>
                <input type="text" name="title" required>

                <label>Genre:</label>
                <input type="text" name="bookgenre" required>

                <label>Author:</label>
                <input type="text" name="author" required>

                <label>Year Published:</label>
                <input type="date" name="year_published" required>

                <label>Cover Image:</label>
                <input type="file" name="cover" accept="image/*" required>

                <input type="submit" value="Add Book">
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
    </footer>

</body>

</html>