<?php
// constraint
//NOT NULL
//UNIQUE
//PRIMARY KEY
//FOREIGN KEY
//CHECK
//DEFAULT
//INDEX*
// $conn = new mysqli('localhost','root','');
// $data = "CREATE DATABASE my_data";
// $query = mysqli_query($conn, $data);
$conn = new mysqli('localhost', 'root', '', 'my_data');
$sql = "CREATE TABLE users(
    id int(13) PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL UNIQUE,
    created_at datetime DEFAULT NULL
)";
$query = mysqli_query($conn, $sql);
//remote INDEX
$data = "ALTER TABLE users DROP INDEX name";
$data = "ALTER TABLE email DROP INDEX email";
//add index
$data = "ALTER TABLE users MODIFY name varchar(255) NOT NULL UNIQUE";
// add more fields
$data = "ALTER TABLE users ADD CONSTRAINT UC_INDEX UNIQUE(name, email)";
$data = "ALTER TABLE users ADD  UNIQUE(name, email)";
//remote
$data = "ALTER TABLE users DROP INDEX UC_INDEX";
//check 
$data = "ALTER TABLE users ADD age int(10) AFTER email";
$data = "ALTER TABLE users ADD CHECK(age>=18)";
$data = "ALTER TABLE users CONSTRAINT age_chk CHECK(age>=18)";
// remote check
$data = "ALTER TABLE users DROP CONSTRAINT CONSTRAINT_1";
$data = "ALTER TABLE users DROP CONSTRAINT age_chk";
// show all constraints
$data = "SELECT * FROM `information_schema.table_constraints` WHERE `constraint_schema` = 'my_data'";
//default
$data = "ALTER TABLE users MODIFY age int(12) DEFAULT 20";
//remote defaut
$data = "ALTER TABLE users ALTER age DROP DEFAULT";