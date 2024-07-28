<?php
// Vulnerable code - SQL Injection
$mysqli = new mysqli("127.0.0.1", "root", "", "shop_dev");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}

$mysqli->close();
