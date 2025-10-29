<?php
require 'lbms.php';
$users = getAllUsers();
?>

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

    table {
        background: white;
        border-collapse: collapse;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        margin: 40px auto;
        width: 90%;
        max-width: 1200px;
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
    }

    table tr:hover {
        background-color: #faf8f3;
    }

    table tr:last-child td {
        border-bottom: none;
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

    footer {
            background-color: white;
            padding: 15px;
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
<title>Manage Users</title>

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
            <h2>User Management</h2>
            <p style="color: #666;">View and manage all registered users</p>
        </div>
    </div>

    <table border="1" align=center>
        <tr>
            <th>UserID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Created at</th>
            <th>Active Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['UserID']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['role']; ?></td>
                <td><?php echo $user['created_at']; ?></td>
                <td><?php echo $user['is_active']; ?></td>
                <td><a href="admin_editUser.php?id=<?php echo $user['UserID']; ?>">Edit</a>
                <a href="admin_deleteUser.php?id=<?php echo $user['UserID']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
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