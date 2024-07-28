--CREATE TABLE `users` (
CREATE TABLE `users` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

--INSERT user
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('admin', 'admin@localhost', 'admin');
INSERT INTO `users` (`name`, `email`, `password`) VALUES ('user', 'user@localhost', 'user');