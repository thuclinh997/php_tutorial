<?php
//query database
//show data
$data = "SELECT * FROM users";
$data = "SELECT email FROM users";
$data = "SELECT email as dia_chi_email FROM users";
//get coditional data
$data = "SELECT * FROM users where id = 2";
$data = "SELECT * FROM users where name like '%linh'";
//lay du lieu khong trung nhau
$data = "SELECT DISTINCT email FROM users";
//sort data
$data = "SELECT * FROM users ORDER BY id DESC";
// BETWEEN
$data = "SELECT * FROM users WHERE id BETWEEN 2, 3";
//LIMIT
$data = "SELECT * FROM users LIMIT 1, 1";
//in
$data = "SELECT * FROM users WHERE id IN(5, 6)";
$data = "SELECT * FROM user WHERE id NOT IN(5, 6)";
//is null
$data = "SELECT * FROM users WHERE age IS NULL";
$data = "SELECT * FROM users WHERE age IS NOT NULL";
$data = "SELECT * FROM users WHERE NOT id = 2";
