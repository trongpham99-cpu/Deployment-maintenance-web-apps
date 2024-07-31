<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Giả sử kiểm tra username và password đúng
    if ($email == 'trong.phamtranduc@gmail.com' && $password == 'password') {
        echo "Login successful!";
    } else {
        echo "Invalid email or password.";
    }
}
?>
