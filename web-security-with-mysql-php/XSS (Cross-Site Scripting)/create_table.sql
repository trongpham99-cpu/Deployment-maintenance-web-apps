CREATE DATABASE demo_xss;
USE demo_xss;

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    comment TEXT
);