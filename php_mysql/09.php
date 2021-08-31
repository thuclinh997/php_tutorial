<?php
//case
$data = "SELECT *, CASE WHEN(age>) THEN 'dat yeu cau'
    ELSE 'khong dat' END AS status FROM users";
//LIMIT
$data = "SELECT * FROM users LIMIT 2, 4";
//JOIN table in database
//LEFT JOIN, INNER JOIN, RIGHT JOIN
//INNER JOIN lay du lieu khi ca hai bang dieu co lien ket voi nhau
$data = "SELECT name, email, title, content FROM users
INNER JOIN posts ON users.id = posts.users_id";
//inner join 3 bang
$data = "SELECT name, email, posts.title as post_title,
    images.title as image_title, url, content
    FROM users INNER JOIN posts ON users.id = posts.user_id INNER JOIN images
    ON posts.id = images.post_id WHERE users.id = 1";
//dat ten
$data = "SELECT u.name, u.email, p.title, p.content FROM users as u INNER JOIN post as p ON u.id = p.user_id";
