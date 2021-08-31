<?php
// function in mySql
// COUNT - SUM - MAX - MIN - AVG - MD5 - SHA1 - NOW
$data = "SELECT COUNT(id) FROM users";
$data = "SELECT MAX(age) as max_age FROM users";
$data = "SELECT MIN(age) as min_age FROM users";
$data = "SELECT SUM(age) as sum_age FROM users";
$data = "SELECT AVG(age) as avg_age FROM users";
//group by
$data = "SELECT COUNT(id) as count_id, name FROM users GROUP BY name";
//having
$data = "SELECT MAX(age) as max_age, name FROM users
    GROUP BY name HAVING max_age >= 25";
