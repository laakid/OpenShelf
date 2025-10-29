<?php
session_start();
require_once 'lbms.php';

if (!isset($_SESSION['UserID'])) {
    header("Location: login.php");
    exit();
}

$userID = $_SESSION['UserID'];
$borrowedBooks = getBorrowedBooksByUser($userID);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Borrowed Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col font-sans bg-gradient-to-br from-[#faf8f3] to-[#f5f1e8]">
    <header>
        <h1 class="text-center py-6 text-[#333] text-3xl font-bold">OpenShelf</h1>
        <nav>
            <ul class="flex gap-5 list-none m-0 p-0 bg-[#f7e3c2] shadow-md">
                <li><a href="index.php" class="block px-4 py-2 font-bold text-black hover:bg-[#eddbb8]">Home</a></li>
                <li><a href="about.php" class="block px-4 py-2 font-bold text-black hover:bg-[#eddbb8]">About</a></li>
                <li><a href="books.php" class="block px-4 py-2 font-bold text-black hover:bg-[#eddbb8]">Books</a></li>
                <li><a href="my_books.php" class="block px-4 py-2 font-bold text-black hover:bg-[#eddbb8]">My Books</a></li>
                <li><a href="logout.php" class="block px-4 py-2 font-bold text-black hover:bg-[#eddbb8]">Log Out</a></li>
                <li><a href="edit.php" class="block px-4 py-2 font-bold text-black hover:bg-[#eddbb8]">Edit Profile</a></li>
            </ul>
        </nav>
    </header>

    <div class="container max-w-screen-xl mx-auto px-5 my-10 flex-1">
        <div class="card bg-white p-11 rounded-lg shadow-md text-center mb-8 border-2 border-[#f7e3c2]">
            <h2 class="text-center py-5 text-[#333] text-2xl font-bold">📚 My Borrowed Books</h2>
        </div>

        <?php if (isset($_GET['returned'])): ?>
            <div class="text-green-600 mb-4 bg-green-50 p-4 rounded-lg border-2 border-green-200">Book returned successfully!</div>
        <?php endif; ?>

        <?php if (empty($borrowedBooks)): ?>
            <div class="bg-white p-8 rounded-lg shadow-md text-center border-2 border-[#f7e3c2]">
                <p class="text-gray-600">You haven't borrowed any books yet.</p>
            </div>
        <?php else: ?>
            <div class="space-y-4">
                <?php foreach ($borrowedBooks as $book): ?>
                    <div class="bg-white p-6 rounded-lg shadow-md border-2 border-[#f7e3c2] hover:border-[#eddbb8] transition-colors">
                        <div class="flex items-start gap-6">
                            <img src="covers/<?php echo $book['cover_filename']; ?>" alt="Cover" class="h-[120px] rounded-md shadow-sm border border-gray-200">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-[#6b5b4f] mb-2"><?php echo $book['title']; ?></h3>
                                <p class="text-gray-600 mb-3">
                                    <span class="inline-block mr-4">📅 Borrowed on: <?php echo date('d M Y', strtotime($book['borrow_date'])); ?></span>
                                </p>
                                <form method="POST" action="return_book.php" class="mt-3">
                                    <input type="hidden" name="book_id" value="<?php echo $book['BookID']; ?>">
                                    <button type="submit" class="px-5 py-2 bg-[#f7e3c2] text-black font-semibold rounded-md hover:bg-[#eddbb8] transition-colors border border-[#eddbb8]">
                                        Return Book
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <footer class="bg-white py-6 shadow-inner text-center mt-auto border-t-2 border-[#f7e3c2]">
        <p class="text-gray-600 text-sm">&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
    </footer>
</body>

</html>