<?php
// Sub query in SQL
$data = "SELECT * FROM posts WHERE user_id IN
(SELECT id FROM users WHERE age > 25)";
//2
$data = "SELECT *, (SELECT name FROM users WHERE users.id = posts.user_id)
AS user_name FROM posts";
//3
$data = "SELECT *, (SELECT name FROM users WHERE users.id = posts.user_id)
AS user_name, (SELECT email FROM users WHERE users.id = posts.id)
AS user_email FROM post";
// 4
// $conn = new mysqli('localhost','root','','my_data');
$data = "SELECT * FROM posts WHERE EXISTS
(SELECT * FROM users WHERE users.id = posts.user_id)";
// $query = mysqli_query($conn, $data);
// // print_r($query);
// $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($result);
