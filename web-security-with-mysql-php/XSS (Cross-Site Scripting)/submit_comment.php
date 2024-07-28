<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_xss";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu
$user = $_POST['username'];
$comment = $_POST['comment'];

// Chèn dữ liệu vào cơ sở dữ liệu (DỄ BỊ LỖI XSS VÀ SQL INJECTION)
$sql = "INSERT INTO comments (username, comment) VALUES ('$user', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New comment created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
