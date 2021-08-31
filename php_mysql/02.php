<?php
//CRUD in mysql
$conn = new mysqli('localhost', 'root', '', 'php_online');
//insert data
$data = "INSERT INTO users(id, fullname, email, password) VALUES(null, 'thuc linh', 'thuclinh@gmail.com',md5('123'))";
// update data
$data = "UPDATE users SET fullname ='myngoc', emaill = 'myngoc@gmail.com',md5('1122') WHERE id = 1";
// delete data
$data = "DELETE FROM users WHERE id = 1";
