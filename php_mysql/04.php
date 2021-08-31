<?php
// set utf8
$data = "ALTER TABLE users CHANGE name name VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL";
//add primary key
$data = "ALTER TABLE users ADD PRIMARY KEY(id)";
//remote primary
$data = "ALTER TABLE users CHAGE id id INT(13)";
$data = "ALTER TABLE users DROP PRIMARY KEY";
//Extra - set utf8
$sql = "CREATE TABLE users(
    id INT(12) NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY(id)
)ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci";

