<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Access denied.");
}

require 'lbms.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_GET['id'])) {
        die("No user ID provided.");
    }

    $id = $_GET['id'];
    $user = selectUserByID($id);

    if (!$user) {
        die("User not found.");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    updateByID($id, $username, $email, $password, $role);
    header('Location: manage_user.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
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
            border: 2px solid #f7e3c2;
        }

        .card h2 {
            color: #6b5b4f;
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
        }

        form {
            margin: 0;
            padding: 0;
            background-color: transparent;
            border: none;
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
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 13px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: border-color 0.3s;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="email"]:focus,
        .form-group input[type="password"]:focus,
        .form-group select:focus {
            outline: none;
            border-color: #f7e3c2ff;
            box-shadow: 0 0 0 3px rgba(247, 227, 194, 0.2);
        }

        .form-group select {
            cursor: pointer;
            background-color: white;
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
            <h2>Edit User</h2>
            <form method="POST" action="admin_editUser.php">
                <input type="hidden" name="id" value="<?php echo isset($user['UserID']) ? $user['UserID'] : ''; ?>">

                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username"
                        value="<?php echo isset($user['username']) ? $user['username'] : ''; ?>">
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>">
                </div>

                <div class="form-group">
                    <label>Role:</label>
                    <select name="role">
                        <option value="user" <?php if ($user['role'] === 'user')
                            echo 'selected'; ?>>User</option>
                        <option value="admin" <?php if ($user['role'] === 'admin')
                            echo 'selected'; ?>>Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" name="password"
                        value="<?php echo isset($user['password']) ? $user['password'] : ''; ?>">
                </div>

                <input type="submit" value="Update" class="btn-submit">
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
    </footer>

</body>

</html>
