<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_hash_password";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu
$username = $_POST['username'];
$password = $_POST['password'];

// Hash mật khẩu
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
