<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Comment Form</title>
</head>

<body>
    <form action="submit_comment.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>