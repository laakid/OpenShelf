<?php
require_once 'lbms.php';

$query = $_GET['query'] ?? '';

if (!empty($query)) {
    $books = queryBook($query);
} else {
    $books = selectAllBooks();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Books</title>
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

        .search-bar {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            text-align: center;
        }

        .search-bar input {
            padding: 12px 20px;
            width: 60%;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .search-bar button {
            padding: 12px 30px;
            background: #6b5b4f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-left: 10px;
        }

        .search-bar button:hover {
            background: #554739;
        }

        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .book-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }

        .book-card h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .book-card p {
            color: #666;
            font-size: 0.9rem;
            margin: 5px 0;
        }

        .book-status {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .available {
            background: #d4edda;
            color: #155724;
        }

        .borrowed {
            background: #f8d7da;
            color: #721c24;
        }

        .book-actions {
            margin-top: 15px;
        }

        .btn-small {
            padding: 8px 15px;
            background: #6b5b4f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.85rem;
            text-decoration: none;
            display: inline-block;
        }

        .btn-small:hover {
            background: #554739;
        }

        .add-book-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            padding: 15px 25px;
            background: #6b5b4f;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            font-size: 1rem;
        }

        .add-book-btn:hover {
            background: #554739;
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #666;
            font-size: 18px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }
        
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <h1 class="text-center py-6 text-[#333] text-3xl font-bold">OpenShelf</h1>
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
        <div>
            <h1 class="text-center py-5 text-[#333] text-2xl font-bold">
                📚 Book Collection
            </h1>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto">
                <form method="GET" action="" class="relative">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" name="query" value="<?php echo htmlspecialchars($query); ?>"
                            placeholder="Search by title, author, or ISBN..."
                            class="w-full pl-12 pr-32 py-4 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                        <div class="absolute inset-y-0 right-0 flex items-center gap-2 pr-2">
                            <?php if (!empty($query)): ?>
                                <a href="?"
                                    class="px-4 py-2 text-gray-600 hover:text-gray-800 font-medium transition-colors">
                                    Clear
                                </a>
                            <?php endif; ?>
                            <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition-colors shadow-sm">
                                Search
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Search Results Info -->
                <?php if (!empty($query)): ?>
                    <div class="mt-4 text-center">
                        <p class="text-gray-600">
                            Showing results for: <span
                                class="font-semibold text-gray-800">"<?php echo htmlspecialchars($query); ?>"</span>
                            <span class="ml-2 text-sm text-gray-500">(<?php echo count($books); ?> found)</span>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <?php if (isset($_GET['success'])): ?>
        <div class="mb-6 p-4 bg-green-100 text-green-800 rounded text-center">
            Book borrowed successfully!
        </div>
    <?php elseif (isset($_GET['error'])): ?>
        <div class="mb-6 p-4 bg-red-100 text-red-800 rounded text-center">
            Failed to borrow book. Try again.
        </div>
    <?php endif; ?>

    <main class="container mx-auto px-4 py-8">
        <?php if (empty($books)): ?>
            <div class="text-center py-12">
                <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-gray-500 text-xl mb-2">
                    <?php if (!empty($query)): ?>
                        No books found matching your search.
                    <?php else: ?>
                        No books found in the collection.
                    <?php endif; ?>
                </p>
                <?php if (!empty($query)): ?>
                    <a href="?"
                        class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        View All Books
                    </a>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <!-- Books Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php foreach ($books as $book): ?>
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                        <!-- Book Cover -->
                        <div class="relative h-64 bg-gray-200 overflow-hidden">
                            <img src="covers/<?php echo rawurlencode(trim(basename($book['cover_filename']))); ?>"
                                alt="<?php echo htmlspecialchars($book['title']); ?>" class="w-full h-full object-cover"
                                loading="lazy"
                                onerror="this.onerror=null;this.src='https://via.placeholder.com/300x400?text=No+Cover';">
                        </div>

                        <!-- Book Info -->
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2 line-clamp-2">
                                <?php echo htmlspecialchars($book['title']); ?>
                            </h2>
                            <p class="text-gray-600 text-sm flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                                </svg>
                                <?php echo htmlspecialchars($book['author']); ?>
                            </p>

                            <!-- Borrow Button -->
                            <div class="mt-4">
                                <?php if (in_array($book['status'], ['Available', 'in-store'])): ?>
                                    <form method="POST" action="borrow_book.php">
                                        <input type="hidden" name="book_id" value="<?php echo $book['BookID']; ?>">
                                        <button type="submit"
                                            class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition-colors">
                                            Borrow
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <button disabled class="px-4 py-2 bg-gray-400 text-white rounded cursor-not-allowed">
                                        Unavailable
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-white mt-12 py-6 shadow-inner">
        <div class="container mx-auto px-4 text-center text-gray-600">
            <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
