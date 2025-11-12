<?php

$host = '127.0.0.1';
$dbname = 'lbms';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// ADMIN FUNCTION
function getAllUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
// USER FUNCTION

function register($username, $email, $password){
    global $conn;

    // check if username already exists
    $check = $conn->query("SELECT * FROM users WHERE username='$username'");
    if ($check->num_rows > 0) {
        return false; // user exists, skip insertion
    }

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    return $conn->query($sql);
}

function login($email, $password){
    global $conn;
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function updateByID($id, $username, $email, $password, $role){
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, password = ?, role = ? WHERE UserID = ?");
    $stmt->bind_param("ssssi", $username, $email, $password, $role, $id);
    return $stmt->execute();
}

function updateUserProfile($id, $username, $email, $password) {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE UserID = ?");
    $stmt->bind_param("sssi", $username, $email, $password, $id);
    return $stmt->execute();
}


function deleteUserByID($id){
    global $conn;

    $sql = "SELECT book_id FROM borrowed_books WHERE user_id = '$id' AND return_date IS NULL";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $bookID = $row['book_id'];
        updateBookStatus($bookID, 'in-store');
    }

    $conn->query("DELETE FROM borrowed_books WHERE user_id = '$id'");
    return $conn->query("DELETE FROM users WHERE UserID = '$id'");
}



function selectUserByID($id){
    global $conn;
    $sql = "SELECT * FROM users WHERE UserID = '$id'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();    
}
function countMembers() {
    global $conn;
    $result = $conn->query("SELECT COUNT(*) AS members FROM users WHERE role = 'user'");
    return $result->fetch_assoc()['members'];
}
// BOOK FUNCTIONS

function AddBooks($title, $genre, $author, $year, $coverName) {
    global $conn;
    $sql = "INSERT INTO books (title, bookgenre, author, year_published, cover_filename, status)
            VALUES ('$title', '$genre', '$author', '$year', '$coverName', 'in-store')";
    return $conn->query($sql);
}


function deleteBook($BookID){
    global $conn;
    $sql = "DELETE FROM books WHERE BookID = '$BookID'";
    return $conn->query($sql);
}

function selectAllBooks() {
    global $conn;
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function queryBook($query) {
    global $conn;
    $sql = "SELECT * FROM books WHERE title LIKE '%$query%'";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
function selectBookByID($id) {
    global $conn;
    $sql = "SELECT * FROM books WHERE BookID = '$id'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function updateBookByID($id, $title, $genre, $author, $year, $coverName = null) {
    global $conn;

    $sql = "UPDATE books SET 
                title = '$title',
                bookgenre = '$genre',
                author = '$author',
                year_published = '$year'";

    if ($coverName) {
        $sql .= ", cover_filename = '$coverName'";
    }

    $sql .= " WHERE BookID = '$id'";
    return $conn->query($sql);
}


function countTotalBooks() {
    global $conn;
    $result = $conn->query("SELECT COUNT(*) AS total FROM books");
    return $result->fetch_assoc()['total'];
}

function countAvailableBooks() {
    global $conn;
    $result = $conn->query("SELECT COUNT(*) AS available FROM books WHERE status = 'in-store'");
    return $result->fetch_assoc()['available'];
}

function countBorrowedBooks() {
    global $conn;
    $result = $conn->query("SELECT COUNT(*) AS borrowed FROM books WHERE status = 'borrowed'");
    return $result->fetch_assoc()['borrowed'];
}

function borrowBook($userID, $bookID) {
    global $conn;
    $sql = "INSERT INTO borrowed_books (user_id, book_id, borrow_date) VALUES ('$userID', '$bookID', NOW())";
    return $conn->query($sql);
}

function updateBookStatus($bookID, $status) {
    global $conn;
    $sql = "UPDATE books SET status = '$status' WHERE BookID = '$bookID'";
    return $conn->query($sql);
}

function returnBook($bookID, $userID) {
    global $conn;
    $conn->query("UPDATE borrowed_books SET return_date = NOW() WHERE book_id = '$bookID' AND user_id = '$userID' AND return_date IS NULL");
    return updateBookStatus($bookID, 'in-store');
}

function getBorrowedBooksByUser($userID){
    global $conn;
    $sql = "SELECT b.BookID, b.title, b.cover_filename, bb.borrow_date, bb.return_date
            FROM borrowed_books bb
            JOIN books b ON bb.book_id = b.BookID
            WHERE bb.user_id = '$userID' AND bb.return_date IS NULL";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}


// OTHER FUNCTIONS
function getRecentActivity($limit = 5) {
    global $conn;
    $sql = "SELECT b.title, u.username, bb.borrow_date, bb.return_date,
                   CASE 
                       WHEN bb.return_date IS NULL THEN 'Issued'
                       ELSE 'Returned'
                   END AS status
            FROM borrowed_books bb
            JOIN books b ON bb.book_id = b.BookID
            JOIN users u ON bb.user_id = u.UserID
            ORDER BY bb.borrow_date DESC
            LIMIT $limit";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

?>
