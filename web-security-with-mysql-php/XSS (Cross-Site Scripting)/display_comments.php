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

// Lấy dữ liệu từ cơ sở dữ liệu
$sql = "SELECT username, comment FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row["username"] . ":</strong> " . $row["comment"] . "</p>";
    }
} else {
    echo "No comments yet!";
}

$conn->close();
