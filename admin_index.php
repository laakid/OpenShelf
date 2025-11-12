<?php
require 'lbms.php';

session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: index.php");
    exit();
}

$totalBooks = countTotalBooks();
$availableBooks = countAvailableBooks();
$borrowedBooks = countBorrowedBooks();
$memberCount = countMembers();
$recentActivity = getRecentActivity();

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="styles.css">

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

        /* Stats Section */
        .stats {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .stat-card {
            flex: 1;
            min-width: 200px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .stat-card h3 {
            font-size: 2rem;
            color: #6b5b4f;
            margin-bottom: 10px;
        }

        .stat-card p {
            color: #666;
        }

        /* Quick Actions */
        .actions {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
            margin-bottom: 30px;
        }

        .actions h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 25px;
            background: #6b5b4f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        .btn:hover {
            background: #554739;
        }

        /* Recent Activity */
        .recent {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .recent h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .activity-item {
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .status {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
        }

        .borrowed {
            background: #fff3cd;
            color: #856404;
        }

        .returned {
            background: #d4edda;
            color: #155724;
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
            <h2>Welcome to Our Library!</h2>
            <p>Manage your books and members efficiently</p>
        </div>

        <!-- Stats Cards -->
        <div class="stats">
            <div class="stat-card">
                <h3><?php echo $totalBooks; ?></h3>
                <p>Total Books</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $availableBooks; ?></h3>
                <p>Available</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $borrowedBooks; ?></h3>
                <p>Borrowed</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $memberCount; ?></h3>
                <p>Members</p>
            </div>
        </div>

        <!-- Recent Activity -->
        <?php foreach ($recentActivity as $activity): ?>
            <div class="activity-item">
                <div>
                    <strong><?php echo $activity['title']; ?></strong><br>
                    <small><?php echo $activity['username']; ?> •
                        <?php echo date('F j', strtotime($activity['borrow_date'])); ?></small>
                </div>
                <span class="status <?php echo strtolower($activity['status']); ?>">
                    <?php echo ucfirst($activity['status']); ?>
                </span>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
    </footer>
</body>

</html>
