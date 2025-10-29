<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Access denied.");
}

require 'lbms.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $book = selectBookByID($id);
    if (!$book) {
        die("Book not found.");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $genre = $_POST['bookgenre'];
    $author = $_POST['author'];
    $year = $_POST['year_published'];

    $coverName = null;
    if (!empty($_FILES['cover']['name'])) {
        $coverName = basename($_FILES['cover']['name']);
        $coverTmp = $_FILES['cover']['tmp_name'];
        $coverPath = 'covers/' . $coverName;

        if (!move_uploaded_file($coverTmp, $coverPath)) {
            echo "Failed to upload new cover.";
            exit();
        }
    }

    updateBookByID($id, $title, $genre, $author, $year, $coverName);
    header('Location: manage_book.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
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
            max-width: 600px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .card h2 {
            color: #6b5b4f;
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            color: #333;
            font-weight: 600;
            font-size: 13px;
        }

        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 13px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: border-color 0.3s;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="date"]:focus {
            outline: none;
            border-color: #f7e3c2ff;
            box-shadow: 0 0 0 3px rgba(247, 227, 194, 0.2);
        }

        .cover-preview {
            text-align: center;
            margin: 15px 0;
        }

        .cover-preview img {
            height: 120px;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .cover-preview label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            font-weight: 600;
            font-size: 13px;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #f7e3c2ff;
            color: #000000ff;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 8px;
        }

        .btn-submit:hover {
            background-color: #eddbb8;
        }

        .btn-submit:active {
            transform: translateY(1px);
        }

        footer {
            background: white;
            padding: 40px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
            margin-top: auto;
        }

        footer p {
            color: #666;
            font-size: 14px;
        }
    
    </style>
</head>

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
        <div class="card">
            <h2>Edit Book</h2>
            <form method="POST" action="admin_editBook.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $book['BookID']; ?>">

                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" name="title" value="<?php echo $book['title']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Genre:</label>
                    <input type="text" name="bookgenre" value="<?php echo $book['bookgenre']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Author:</label>
                    <input type="text" name="author" value="<?php echo $book['author']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Year Published:</label>
                    <input type="date" name="year_published" value="<?php echo $book['year_published']; ?>" required>
                </div>

                <div class="cover-preview">
                    <label>Current Cover:</label>
                    <img src="covers/<?php echo $book['cover_filename']; ?>" alt="Cover">
                </div>

                <div class="form-group">
                    <label>Change Cover Image:</label>
                    <input type="file" name="cover" accept="image/*">
                </div>

                <input type="submit" value="Update Book" class="btn-submit">
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
    </footer>
</body>
</html>