<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ten_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lưu thông tin từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = $_POST['author'];
    $story = $_POST['story'];

    $sql = "INSERT INTO stories (author, story) VALUES ('$author', '$story')";

    if ($conn->query($sql) === TRUE) {
        echo "Câu chuyện đã được lưu thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
