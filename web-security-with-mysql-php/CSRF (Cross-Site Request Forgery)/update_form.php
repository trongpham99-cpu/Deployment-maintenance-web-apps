<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Information</title>
</head>

<body>
    <h2>Update Information</h2>
    <form action="update_info.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="user1" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="user1@example.com" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>