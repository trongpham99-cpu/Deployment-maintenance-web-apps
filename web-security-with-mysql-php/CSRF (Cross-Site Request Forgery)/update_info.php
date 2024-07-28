<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_csrf";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu
$new_username = $_POST['username'];
$new_email = $_POST['email'];

// Cập nhật thông tin người dùng
$sql = "UPDATE users SET username='$new_username', email='$new_email' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Information updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
