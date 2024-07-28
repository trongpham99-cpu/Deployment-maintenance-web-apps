CREATE DATABASE demo_csrf;

USE demo_csrf;

CREATE TABLE
    users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50),
        email VARCHAR(100)
    );

INSERT INTO
    users (username, email)
VALUES
    ('user1', 'user1@example.com');