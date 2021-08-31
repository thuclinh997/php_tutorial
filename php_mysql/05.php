<?php
// foreign key
$conn = new mysqli('localhost', 'root', '');
$sql = "CREATE DATABASE shops";
$query = mysqli_query($conn, $sql);
$conn = new mysqli('localhost', 'root', '', 'shops');
$sql = "CREATE TABLE users(
    id INT(13) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY(id)
)ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci";
$query = mysqli_query($conn, $sql);
$sql = "CREATE TABLE posts(
    id INT(13) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    user_id INT(13) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci";
$query = mysqli_query($conn, $sql);
$sql = "CREATE TABLE images(
    id INT(13) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    url VARCHAR(255) NOT NULL,
    title VARCHAR(255),
    post_id INT(13) NOT NULL,
    FOREIGN KEY(post_id) REFERENCES posts(id)
)ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci";
$query = mysqli_query($conn, $sql);
print_r($conn);
//remote foreign key
$data = "SHOW CREATE TABLE images";
$data = "ALTER TABLE images DROP FOREIGN KEY images_ibfk_1";
//add foreign key
$data = "ALTER TABLE iamges ADD FOREIGN KEY(post_id) REFERENCES posts(id)";
$data = "ALTER TABLE images ADD CONSTRAINT image_1 FOREIGN KEY(post_id) REFERENCES posts(id)";
