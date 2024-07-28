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

// Lấy mật khẩu hash từ cơ sở dữ liệu
$sql = "SELECT password FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    // Xác minh mật khẩu
    if (password_verify($password, $hashed_password)) {
        echo "Login successful";
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found with this username";
}

$conn->close();
