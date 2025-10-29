<?php
require 'lbms.php';
$books = selectAllBooks();
?>

<html>

<head>
    <title>Manage Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

        .add-book-btn {
            background-color: #f7e3c2ff;
            color: #333;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .add-book-btn:hover {
            background-color: #eddbb8;
        }

        table {
            background: white;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            margin: 40px auto;
            width: 90%;
            max-width: 1500px;
        }

        table th {
            background-color: #f7e3c2ff;
            color: #333;
            font-weight: bold;
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #eddbb8;
        }

        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #f0f0f0;
            color: #555;
            vertical-align: middle;
        }

        table tr:hover {
            background-color: #faf8f3;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        table td img {
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 120px;
            height: 140px;
            object-fit: cover;
        }

        table td a {
            color: #6b5b4f;
            text-decoration: none;
            font-weight: 500;
            margin-right: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        table td a:hover {
            background-color: #f7e3c2ff;
        }

        table td a:last-child {
            color: #d9534f;
        }

        table td a:last-child:hover {
            background-color: #f8d7da;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="text-center py-6 text-[#333] text-3xl font-bold">Welcome admin</h1>
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
            <h2 class="text-center py-5 text-[#333] text-2xl font-bold">Book Management</h2>
            <p style="color: #666;">View and manage all books in the collection</p>
            <a href="admin_addBook.php" class="add-book-btn">+ Add New Book</a>
        </div>
    </div>

    <table border="1" align=center>
        <tr>
            <th>BookID</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Year Published</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo $book['BookID']; ?></td>
                <td>
                    <img src="covers/<?php echo $book['cover_filename']; ?>" alt="Cover">
                </td>
                <td><?php echo $book['title']; ?></td>
                <td><?php echo $book['bookgenre']; ?></td>
                <td><?php echo $book['year_published']; ?></td>
                <td><?php echo $book['status']; ?></td>
                <td>
                    <a href="admin_editBook.php?id=<?php echo $book['BookID']; ?>">Edit</a>
                    <a href="admin_deleteBook.php?id=<?php echo $book['BookID']; ?>"
                        onclick="return confirm('Are you sure you want to delete this book?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <footer class="bg-white mt-12 py-6 shadow-inner">
        <div class="container mx-auto px-4 text-center text-gray-600">
            <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>