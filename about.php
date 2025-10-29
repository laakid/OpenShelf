<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
        height: 100%;
        }
         
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #faf8f3 0%, #f5f1e8 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
            flex: 1;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
            margin-bottom: 30px;
        }

        .card h2 {
            color: #6b5b4f;
            margin-bottom: 10px;
            font-size: 32px;
        }

        .info-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            margin-top: 30px;
        }

        .info-card h2 {
            color: #6b5b4f;
            margin-bottom: 20px;
            font-size: 28px;
        }

        .info-card h3 {
            color: #6b5b4f;
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: 22px;
        }

        .info-card p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .info-card ul {
            color: #555;
            line-height: 1.8;
            margin-left: 30px;
            margin-bottom: 20px;
        }

        .info-card ul li {
            margin-bottom: 10px;
        }

        footer {
            background: white;
            padding: 20px;
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

    <div class="container">
        <div class="card">
            <h2>Welcome to Our Library!</h2>
        </div>

        <div class="info-card">
            <h2>About OpenShelf</h2>
            <p>
                OpenShelf is a web-based platform designed to make
                borrowing and managing books easier for both members and administrators.
                It provides quick access to available books, borrowing records, and user
                profiles in a simple and efficient way.
            </p>

            <h3>Features</h3>
            <ul>
                <li>Search and browse books by title and author</li>
                <li>Borrow and return books online</li>
            </ul>

            <h3>Contact Us</h3>
            <p>Email: syamarkid@example.com</p>
            <p>Phone: +60 123-456-789</p>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
    </footer>
</body>
</html>